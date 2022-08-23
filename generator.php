




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generatorius</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

<style>
   .backgr {
    background-color: burlywood;
   } 
</style>

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-5 backgr">
                    <div class="card-header d-flex justify-content-center">
                        <div class="mt-4 mb-4">
                            <h1>Multiplication Table Worksheet</h1>
                        </div>
                    </div>
                    <div class="card-body">
                        <!-- FORMOS pradžia -->
                        <form action="generator-out.php" method="post">
                            <!-- Lentelės dydis -->
                            <div>
                                <div class="d-flex justify-content-center pb-3 pt-5">
                                    <h4>Number set:</h4>
                                </div>
                                <div class="row">
                                    <div class="col-2"></div>
                                    <div class="col-8">
                                        <select id="scope" name="scope" class="form-control mb-3 ">
                                            <option value="" disabled selected>Select set</option>
                                            <option value="5">1-5</option>
                                            <option value="10">1-10</option>
                                            <option value="12">1-12</option>
                                            <option value="15">1-15</option>
                                        </select>
                                    </div>
                                    <div class="col-2"></div>
                                </div>
                            </div>

                            <!-- Lentelės sudėtingumo lygis -->
                            <div>
                                <div>
                                    <div class="d-flex justify-content-center pb-3 pt-5">
                                        <h4>Difficulty:</h4>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-evenly">
                                    <div>
                                        <input type="radio" id="easy_10" name="level" value="10">
                                        <label for="easy" class="form-label ps-3">Easy (10%)</label>
                                    </div>
                                    <div>
                                        <input type="radio" id="medium_30" name="level" value="30">
                                        <label for="medium" class="form-label ps-3">Medium (30%)</label>
                                    </div>
                                    <div>
                                        <input type="radio" id="hard_50" name="level" value="50">
                                        <label for="hard" class="form-label ps-3">Hard (50%)</label>
                                    </div>
                                </div>
                            </div>
                            <!-- Duomenų siuntimo mygtukas -->
                            <div class="d-flex justify-content-center pt-5 pb-3">
                                    <button type="submit" class="btn btn-success col-md-4 ms-2" name="submit1">Generate</button>
                                </div>
                        </form>
                        <!-- FORMOS pabaiga -->
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>

</html>