<?php
require_once "db.php";

function check_authorize($login, $password) {
    global $users;
    return isset($users[$login]) && $users[$login]['pass'] === $password;
}

function check_admin($login, $password) {
    global $users;
    return check_authorize($login, $password) && $users[$login]['role'] === 'admin';
}

function search_tours($criteria) {
    global $tours;
    $results = [];

    $criteria = mb_strtolower($criteria);

    foreach ($tours as $tour) {
        $match = false;
        foreach ($tour as $key => $value) {
            if (is_array($value)) {
                foreach ($value as $subkey => $subvalue) {
                    if (is_array($subvalue)) {
                        foreach ($subvalue as $k => $v) {
                            if (stripos(mb_strtolower($v), $criteria) !== false) {
                                $match = true;
                                break;
                            }
                        }
                    } else {
                        if (stripos(mb_strtolower($subvalue), $criteria) !== false) {
                            $match = true;
                            break;
                        }
                    }
                }
            } else {
                if (stripos(mb_strtolower($value), $criteria) !== false) {
                    $match = true;
                    break;
                }
            }
        }

        if ($match) {
            $results[] = $tour;
        }
    }

    return $results;
}
function search_tours_by_country_and_date($country, $daterange) {
    global $tours;

    $dates = explode(' - ', $daterange);
    if (count($dates) != 2) {
        return [];
    }

    $start_date_converted = DateTime::createFromFormat('m/d/Y', trim($dates[0]));
    $end_date_converted = DateTime::createFromFormat('m/d/Y', trim($dates[1]));

    if (!$start_date_converted || !$end_date_converted) {
        return [];
    }

    $start_date_formatted = $start_date_converted->format('d-m-Y');
    $end_date_formatted = $end_date_converted->format('d-m-Y');

    $matching_tours = [];

    foreach ($tours as $tour) {
        if (!empty($country) && $tour['cities'][0]['country'] !== $country) {
            continue;
        }

        $tour_start_date = DateTime::createFromFormat('d-m-Y', $tour['departure_date']);
        $tour_end_date = DateTime::createFromFormat('d-m-Y', $tour['arrival_date']);

        if (
            ($tour_start_date <= $end_date_converted && $tour_end_date >= $start_date_converted) ||
            ($start_date_converted <= $tour_end_date && $end_date_converted >= $tour_start_date)
        ) {
            $matching_tours[] = $tour;
        }
    }

    return $matching_tours;
}
function sort_tours($tours, $criteria) {
    $n = count($tours);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            $swap = false;
            
            $tour1 = apply_hot_tour_discount($tours[$j]);
            $tour2 = apply_hot_tour_discount($tours[$j + 1]);

            switch ($criteria) {
                case 'name':
                    if (mb_strtolower($tour1['name']) > mb_strtolower($tour2['name'])) {
                        $swap = true;
                    }
                    break;
                case 'cost':
                    if ($tour1['cost'] > $tour2['cost']) {
                        $swap = true;
                    }
                    break;
                case 'departure_date':
                    $date1 = strtotime($tour1['departure_date']);
                    $date2 = strtotime($tour2['departure_date']);
                    
                    if (date('Y', $date1) > date('Y', $date2) || 
                        (date('Y', $date1) == date('Y', $date2) && date('m', $date1) > date('m', $date2)) || 
                        (date('Y', $date1) == date('Y', $date2) && date('m', $date1) == date('m', $date2) && date('m', $date1) > date('m', $date2))) {
                        $swap = true;
                    }
                    break;
                case 'duration':
                    if (calculate_duration($tour1['departure_date'], $tour1['arrival_date']) > 
                        calculate_duration($tour2['departure_date'], $tour2['arrival_date'])) {
                        $swap = true;
                    }
                    break;
                default:
                    return $tours;
            }
            if ($swap) {
                $temp = $tours[$j];
                $tours[$j] = $tours[$j + 1];
                $tours[$j + 1] = $temp;
            }
        }
    }
    return $tours;
}

function apply_hot_tour_discount($tour, $discount_percent = 40) {
    if ($tour['hot_tour']) {
        $tour['cost'] *= (1 - $discount_percent / 100);
    }
    return $tour;
}

function generate_financial_report() {
    global $tours;
    $total_seats = 0;
    $total_revenue = 0;

    foreach ($tours as $tour) {
        $total_seats += $tour['seats'];
        $total_revenue += $tour['cost'] * (20 - $tour['seats']);
    }

    return [
        'total_available_seats' => $total_seats,
        'total_revenue' => $total_revenue
    ];
}
function calculate_duration($departure_date, $arrival_date)
{
    $start = strtotime($departure_date);
    $end = strtotime($arrival_date);

    $diff = $end - $start;

    $days = floor($diff / (60 * 60 * 24));

    (int)$duration = $days;

    return trim($duration);
}
function test_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}
?>