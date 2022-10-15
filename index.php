<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <form>
            <div class="mb-3">
                <label for="num1" class="form-label">Number One</label>
                <input type="text" name="num1" class="form-control" id="num1">
            </div>
            <div class="mb-3">
                <label for="num2" class="form-label">Number Two</label>
                <input type="text" name="num2" class="form-control" id="num2">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Choose the process</label>
                <select class="form-select" name="operator">
                    <option>None</option>
                    <option>Add</option>
                    <option>Subtract</option>
                    <option>Multiply</option>
                    <option>Divide</option>
                </select>
            </div>
            <button type="submit" name="submit" class="btn btn-outline-success">Calculate</button>
        </form>
        <div class="p-4">
            <p>The answer is :</p>
            <div class="alert alert-primary py-5 " role="alert">
                <?php
                if (isset($_GET['submit'])) {
                    $result1 = $_GET['num1'];
                    $result2 = $_GET['num2'];
                    $operator = $_GET['operator'];
                    switch ($operator) {
                        case "None":
                            echo "You need to select a method!";
                            break;
                        case "Add":
                            echo  $result1 + $result2;
                            break;
                        case "Subtract":
                            echo $result1 - $result2;
                            break;
                        case "Multiply":
                            echo $result1 * $result2;
                            break;
                        case "Divide":
                            echo $result1 / $result2;
                            break;
                    }
                }
                ?>
            </div>
        </div>



    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>