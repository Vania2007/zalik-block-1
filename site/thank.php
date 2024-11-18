<?php
include "header.php";
include "action.php";
$fname = isset($_GET['fname']) ? test_input($_GET['fname']) : '';
$lname = isset($_GET['lname']) ? test_input($_GET['lname']) : '';

$report = generate_financial_report();
?>
<div class="hero hero-inner">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12 mx-auto text-center">
                <div class="intro-wrap">
                    <h1 class="mb-0">Дякуємо, <?php echo htmlspecialchars($fname)?> <?php echo htmlspecialchars($lname)?>!</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container my-5">
    <div class="card shadow-lg">
        <div class="card-body text-center">
            <h2 class="card-title">Ваше питання буде розглянуто дуже скоро!</h2>
            <p class="card-text">Ми цінуємо ваш інтерес і з нетерпінням чекаємо можливості допомогти вам. Якщо у вас є додаткові запитання, не соромтеся звертатися до нас.</p>
            <div class="mt-4">
                <i class="fa-solid fa-envelope fa-2xl" style="color: #007bff;"></i>
                <p class="mt-2">Контактна інформація: <a href="mailto:support@example.com">mail@megamail.com</a></p>
            </div>
            <div class="mt-4">
                <a href="./" class="btn btn-primary btn-lg">Повернутися на головну</a>
            </div>
        </div>
    </div>
</div>

<?php include "footer.php";?>