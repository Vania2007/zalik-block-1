<?php
include "header.php";
include "action.php";
include "db.php";

$is_logged_in = false;
$current_user = '';
$error_message = '';

$tours_display = $tours;

if (isset($_GET['search'])) {
    $search_term = test_input($_GET['search']);
    $tours_display = search_tours($search_term);
}

if (isset($_GET['sort'])) {
    $sort_criteria = $_GET['sort'];
    $tours_display = sort_tours($tours_display, $sort_criteria);
}
if (isset($_GET['country']) && isset($_GET['daterange'])) {
    $country = test_input($_GET['country']);
    $dates = test_input($_GET['daterange']);
    
    $tours_display = search_tours_by_country_and_date($country, $dates, $dates);
}
?>
<div class="hero hero-inner">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mx-auto text-center">
                <div class="intro-wrap">
                    <h1 class="mb-0">Результати пошуку</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mt-4">
    <div class="col-md-8">
    <?php if (empty($tours_display)): ?>
        <div class="alert alert-warning">
                На жаль, за вашим запитом не було знайдено турів, але у нас є інші пропозиції:
            </div>
            <?php $filtered_tours = $tours;endif;?>
        <div class="row">
        <form method="get" class="col-md-6">
            <input type="text" name="search" class="form-control" placeholder="Пошук турів">
            <button type="submit" class="btn btn-primary mt-2">Шукати</button>
        </form>
            <form method="get" class="col-md-6">
                <select name="sort" class="form-control">
                    <option value="name" <?= (isset($_GET['sort']) && $_GET['sort'] == 'name') ? 'selected' : ''; ?>>Сортувати по назві</option>
                    <option value="cost" <?= (isset($_GET['sort']) && $_GET['sort'] == 'cost') ? 'selected' : ''; ?>>Сортувати по вартості</option>
                    <option value="departure_date" <?= (isset($_GET['sort']) && $_GET['sort'] == 'departure_date') ? 'selected' : ''; ?>>Сортувати по даті початку подорожі</option>
                    <option value="duration" <?= (isset($_GET['sort']) && $_GET['sort'] == 'duration') ? 'selected' : ''; ?>>Сортувати по тривалості</option>
                </select>
                <input type="hidden" name="search" value="<?= isset($_GET['search']) ? htmlspecialchars($_GET['search']) : ''; ?>">
                <button type="submit" class="btn btn-primary mt-2">Сортувати</button>
            </form>
            </div>
        </div>

        <div class="row mt-5">
                <?php foreach ($tours_display as $tour): ?>
                    <div class="col-md-4 mb-4">
                    <div class="card mb-4 rounded">
                    <img src="<?= htmlspecialchars($tour['imageSrc']) ?>" class="card-img-top" alt="<?= htmlspecialchars($tour['name']) ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= htmlspecialchars($tour['name']) ?>
                            <?php if (!empty($tour['hot_tour'])): ?>
                                <i class="fa-solid fa-fire" style="color: #ff9500;"></i>
                            <?php endif; ?>
                        </h5>
                        <p class="card-text"><strong>Країна:</strong> <?= htmlspecialchars($tour['cities'][0]['country']) ?></p>
                        <p class="card-text"><strong>Ціна:</strong> $<?php 
                            if (!empty($tour['hot_tour'])) {
                                $tour = apply_hot_tour_discount($tour);
                            }
                            echo htmlspecialchars($tour['cost']);
                        ?> | <strong>Транспорт:</strong> <?= htmlspecialchars($tour['transport']) ?></p>
                        <p class="card-text"><strong>Тривалість:</strong> <?= calculate_duration($tour['departure_date'], $tour['arrival_date']) ?> днів</p>
                        <p class="card-text"><strong>Дата початку:</strong> <?= htmlspecialchars($tour['departure_date']) ?></p>
                        <div class="d-flex">
                            <div class="me-3"><strong>Готелі:</strong> </div>
                            <div class="d-flex flex-column ml-2">
                                <?php foreach ($tour['cities'] as $city): ?>
                                    <div><?= htmlspecialchars($city['hotel']);?> <?=htmlspecialchars($city['stars'])?><i class="fa-solid fa-star fa-2xs" style="color: #FFD43B; vertical-align: 4px;"></i></div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?php include "footer.php"; ?>