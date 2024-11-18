<?php
include "header.php";
include "action.php";
$login = isset($_GET['login']) ? test_input($_GET['login']) : '';

$report = generate_financial_report();
?>
<div class="hero hero-inner">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12 mx-auto text-center">
                <div class="intro-wrap">
                    <?php
                    if (!isset($users[$login]) || !check_admin($login, $users[$login]['pass'])) {
                        echo "<h1 style='font-size: 48px;'>У доступі відмовлено. Ви не є адміністратором.</h1></div>
                        </div>
                    </div>
                </div>
            </div>";
                        include "footer.php";
                        exit();
                    }?>
                    <h1 class="mb-0">Фінансовий звіт</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="my-5">
    <div class="row mb-5">
        <div class="col-md-6 offset-md-3">
            <div class="financial-dashboard">
                <div class="card shadow-lg">
                    <div class="card-header bg-primary text-white">
                        <h2 class="text-center mb-0">
                            <i class="fas fa-chart-line me-2"></i>Фінансова аналітика
                        </h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="financial-metric seats-metric">
                                    <div class="metric-icon bg-info text-white">
                                        <i class="fas fa-chair"></i>
                                    </div>
                                    <div class="metric-content">
                                        <h4 class="metric-title">Доступні місця</h4>
                                        <p class="metric-value display-6 text-info">
                                            <?php echo $report['total_available_seats']; ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="financial-metric revenue-metric">
                                    <div class="metric-icon bg-success text-white">
                                        <i class="fas fa-dollar-sign"></i>
                                    </div>
                                    <div class="metric-content">
                                        <h4 class="metric-title">Загальний дохід</h4>
                                        <p class="metric-value display-6 text-success">
                                            $<?php echo number_format($report['total_revenue'], 2); ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="additional-insights text-center">
                            <h5 class="text-muted">
                                <i class="fas fa-info-circle me-2"></i>Додаткові показники
                            </h5>
                            <div class="row">
                                <div class="col-md-4">
                                    <small class="text-muted">Середня вартість туру</small>
                                    <p class="fw-bold">$<?php 
                                        $avg_tour_cost = $report['total_revenue'] / count($tours);
                                        echo number_format($avg_tour_cost, 2); 
                                    ?></p>
                                </div>
                                <div class="col-md-4">
                                    <small class="text-muted">Кількість турів</small>
                                    <p class="fw-bold"><?php echo count($tours); ?></p>
                                </div>
                                <div class="col-md-4">
                                    <small class="text-muted">Заброньовані місця</small>
                                    <p class="fw-bold"><?php 
                                        $booked_seats = array_sum(array_column($tours, 'seats')) - $report['total_available_seats'];
                                        echo $booked_seats; 
                                    ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-muted text-center">
                        <small>Станом на <?php date_default_timezone_set('Europe/Kyiv'); echo date('d.m.Y H:i'); ?></small>
                    </div>
                </div>
            </div>
        </div>
</div>

<?php include "footer.php";?>