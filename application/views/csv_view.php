<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Project Buku Telepon</title>
        <link href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.css" type="text/css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/css/styles.css" type="text/css" rel="stylesheet" />
        <script src="<?php echo base_url(); ?>assets/js/jquery.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
    </head>
    <body>
        
 
        <div class="container" style="margin-top:50px">    
             <br>
 
             
 
            <h2>Import data csv ke mysql</h2>
                <form method="post" action="<?php echo site_url() ?>csv/importcsv" enctype="multipart/form-data">
                    Daerah:
                    <select name="daerah">
                        <option value="1">SWD 1</option>
                        <option value="2">SWD 2</option>
                    </select><br><br>
                    File(CSV):
                    <input type="file" name="userfile" ><br><br>
                    <input type="submit" name="submit" value="UPLOAD" class="btn btn-primary">
                </form>
            <br><br>
           
            <hr>
            <footer>
                <p>&copy;Buku Telepon</p>
            </footer>
        </div>
    </body>
</html>