<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <link rel="stylesheet" href="cssdesigns.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Document</title>

</head>
<body>
<form action="update.php" method="get">
        <h2>
            <center>Enter the choice<h2>
                

                    <select class="btn btn-success" id="cars" name="new">
                        <option value="title">title</option>
                        <option value="author">author</option>
                        <option value="subject">subject</option>
                        <option value="date">date</option>
                    </select>
                    <div class="mb-3 mt-3 col-sm-5">
                        <label>Search:</label>
                        <input type="text" class="form-control " id="search" placeholder="Select books" name="search">
                        <input type="text" class="form-control " id="search1" placeholder="Update name" name="search1">
                    </div>
                    <br>
                    <input type="submit" class="btn btn-primary" value="submit">

                    <input type="reset" class="btn btn-primary" value="Reset">
            </center>
            <br>
</form>
</body>
</html>