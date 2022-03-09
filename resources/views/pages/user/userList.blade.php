<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <title>AJAX</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="col-md-12">
            <h3>Insert du lieu</h3>
            <form method="POST" id="insert_data_thongtin">
                <label>Name</label>
                <input type="text" class="form-control" id="name" placeholder="Type name....">
                <label>Phone</label>
                <input type="text" class="form-control" id="phone" placeholder="Type phone.....">
                <label>Address</label>
                <input type="text" class="form-control" id="address" placeholder="Type address...">
                <label>Email</label>
                <input type="text" class="form-control" id="email" placeholder="Type email....">
                <label>Company</label>
                <input type="text" class="form-control" id="company" placeholder="Type company....">
                <br>
                <input type="button" name="insert_data" id="button_insert" value="Insert" class="btn btn-sucess">
            </form> 
        </div>
    </div>
    <script type="text/javascript">
        $('#button_insert').on('click',function(){
            var name = $('#name').val();
            var phone = $('#phone').val();
            var address = $('#address').val();
            var email = $('#email').val();
            var company = $('#company').val();
            if(name == '' || phone == ''|| address == ''|| email == ''|| company == ''){
                alert('fillll');
            }else{
                $.ajax({

                });
            }
        });
    </script>
</body>
</html>
