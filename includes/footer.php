<footer class="bg-primary text-white">
    <div class="container">
        <div class="row">
            <div class="col">
                <p class="lead text-center my-1" style="font-size: 16px;">&copy; ---All right reserved <span id="year"></span></p>
            </div>
        </div>
    </div>
</footer>
<div style="height: 10px; background-color: #0d47a1;"></div>

</body>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script>
    $('#year').text(new Date().getFullYear());
</script>

</html>