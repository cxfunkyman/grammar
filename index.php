<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://localhost/Innovatank/grammar/assets/css/bootstrap-extended.css" rel="stylesheet">
    <link href="http://localhost/Innovatank/grammar/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://localhost/Innovatank/grammar/assets/css/header-colors.css" rel="stylesheet">
    <link href="http://localhost/Innovatank/grammar/assets/css/icons.css" rel="stylesheet">
    <link href="http://localhost/Innovatank/grammar/assets/css/pace.min.css" rel="stylesheet">
    <title>Grammary Check</title>
</head>

<body>

    <div class="card" style="width: 97%; margin: 20px;">
        <div class="card-body">
            <h2 class="card-title text-center">TEST GRAMMARY CHECK</h2>
            <hr>
            <div class="row">
                <label for="textArea1">Example 1</label>
                <div class="col-md-12 mb-3">
                    <div class="form-group">
                        <textarea class="form-control" name="textArea1" id="textArea1" rows="3"></textarea>
                    </div>
                </div>
                <label for="textArea2">Example 2</label>
                <div class="col-md-12 mb-3">
                    <div class="form-group">
                        <textarea class="form-control" name="textArea2" id="textArea2" rows="3"></textarea>
                    </div>
                </div>
            </div>
            <hr>
            <form class="p-4" id="resultForm" autocomplete="off">
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <label>Error Amount</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-xmark"></i></span>
                            <input class="form-control" type="number" id="errorAmount" name="errorAmount" disabled>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <label>Essay Grade</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-marker"></i></span>
                            <input class="form-control" type="number" id="essayGrade" name="essayGrade">
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <label>Final Grade</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-award"></i></span>
                            <input class="form-control" type="number" id="finalGrade" name="finalGrade" disabled>
                        </div>
                    </div>
                </div>
            </form>
            <hr>
            <div class="row">
                <div class="col-md-2">
                    <div class="input-group">
                        <div class="d-grid">
                            <button class="btn btn-primary" id="btnGrade">Grade Essay</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="input-group">
                        <div class="d-grid">
                            <button class="btn btn-warning" id="btnNew">New Essay</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="page-footer" style="text-align: center;">
        <p class="mb-0">Copyright © <?php echo date('Y'); ?>. All right reserved.</p>
    </footer>
    <script src="http://localhost/Innovatank/grammar/assets/js/ckeditor.js"></script>
    <script src="http://localhost/Innovatank/grammar/assets/js/functions.js"></script>
    <script src="http://localhost/Innovatank/grammar/assets/js/all.min.js"></script>
    <script src="http://localhost/Innovatank/grammar/assets/js/bootstrap.bundle.min.js"></script>
    <script src="http://localhost/Innovatank/grammar/assets/js/sweetalert2.all.min.js"></script>
</body>

</html>