<html>
<head>
	<meta charset="utf-8">
    <title>Sửa</title>
<style>
        .form {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 30px;
        }
        input[type=text], select {
            width: 300%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type=submit] {
            /* width: 100%; */
            background-color: #4CAF50;
            color: white;
            padding: 6px 12px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 40%;
            font-size: 16px;
            font-weight: 600;
            line-height: 20px;
            white-space: nowrap;
            vertical-align: middle;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }
        .footer {
        background-color: #111111;
        padding: 20px;
        text-align: center;
        margin-top:20px;
        color: white;
        }
    </style>
    
</head>
<body>
<center><h1>Sửa thông tin tuyển dụng</h1></center>
<form method="post" action="?page=tuyendung&action=update" enctype="multipart/form-data" style="margin-top:10%; margin-left:25%"> <!-- Bổ sung khi có upload file -->
<table>

<tr>
        <td style="font-size: 20px">Tiêu đề</td>
        <td><input type="text" name="title" value="<?=$td['title'] ?>" /></td>
    </tr>
    <tr>
        <td style="font-size: 20px">Vị trí tuyển dụng</td>
        <td><input type="text" name="location" value="<?=$td['location'] ?>" /></td>
    </tr>
    <tr>
        <td style="font-size: 20px">Thời gian làm</td>
        <td><select name="id_tg">
                <option value="0">--Thời gian--</option>  
            <?php foreach($tg as $tg) { ?>
                <option value="<?=$tg['id']?>"><?=$tg['time']?></option>            
            <?php } ?>
        
        </select></td>
    </tr>
    </tr>
    <tr>
        <td style="font-size: 20px">Địa điểm phỏng vấn</td>
        <td><input type="text" name="address" value="<?=$td['address'] ?>" /></td>
    </tr>
    
    
    <tr>
        <td></td>
        <td><input type="submit" name="td" value="Sửa đổi" /></td>
    </tr>
</table>
        <input type="hidden" value="<?=$td['id'] ?>" name="id" />
</form>
<div class="footer">
        <img src="http://theme.hstatic.net/1000075078/1000297410/14/logo.png?v=39" width="25%">
            <p> Contact Us<br>
                Hotline Nhân sự: ‎(028) 71078079 Ext:500<br>
                Email: tch@thecoffeehouse.vn<br>
                Website: http://www.thecoffeehouse.com/<br>
                Facebook: https://www.facebook.com/The.Coffee.House.2014</p>
    </div>
</body>

