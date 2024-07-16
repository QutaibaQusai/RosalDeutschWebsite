<?php
$page_title = 'متحتوى مجاني';
include '../include/head.php';
include '../include/search.php';


?>

<div class="tst">
    <h2>محتوى مجاني</h2>
    <p>نحن نؤمن بأن واجبنا مشاركة الطلاب والراغبين بالتعلم بعض النصائح والمساعدات التي تسهم في تنمية مهاراتهم ,
        وفيما يلي بعض تلك المساعدات التي قد تخدمك وترشدك عمليا
    </p>
</div>

<div class="content">
    <div dir="rtl" class="container">
        <!-- <h2 class="mb-5 text-center">الجدول رقم 9</h2> -->

        <div class="table-responsive text-center">
            <table class="table custom-table" dir="rtl">
                <thead>
                    <tr>
                        <th scope="col">المادة</th>
                        <th scope="col">الوصف</th>
                        <th scope="col">الرابط</th>
                    </tr>
                </thead>
                <tbody id="search-results">
                </tbody>
            </table>
        </div>
    </div>
</div>
<button id="back-to-top"><i class="fa-solid fa-arrow-up"></i></button>
<!-- footer -->
<?php

include '../include/footer.php';

?>

 



<script src="../assets/vendors/jquery/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="../assets/vendors/aos-master/dist/aos.js"></script>
<script src="../assets/js/main.js"></script>

</body>

</html>