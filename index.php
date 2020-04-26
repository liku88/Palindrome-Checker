<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="index.css">

	<title>Palindrome checker</title>

	<!--  -->

	<style>

	</style>

</head>

<body>

	<div class="container">
	
	<div class="box">
	    <form action="" method="post">
	        <header>
	            <h4>Palindrome Checker</h4>
	            <h3>
	                <?php
                    if(isset($_POST['submit'])){
                        $inputword = $_POST['text-area'];
                        $reverse = strrev($inputword);
                        
                        if($inputword == $reverse){
                            echo "The word {$inputword} is palindrome ";
                        }else{
                            echo "The word {$inputword} is not a palindrome ";
                        }
                    }
                    ?>
	            </h3>
	        </header>
	        <textarea class="form-control" name="text-area" rows="4" placeholder="Enter your word....."  required></textarea> <br>
	        <input type="submit" value="Submit" name="submit" class="btn btn-success mycus1">
	    </form>
	    <div class="footer">
	        <span>Designed by Mangaldeep</span>
	    </div>
	</div>

	</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>

	<script>
	</script>

</body>

</html>
