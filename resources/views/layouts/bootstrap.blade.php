<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title>ページタイトル</title>
<!--Bootstrap assets -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<!--自作CSS start-->
<style type="text/css">
/*ここに調整CSS記述*/
#container{ margin: 60px; }
</style>
<!--自作CSS end-->
</head>
<body>
    <div class="container">
        <div class="page-header">
            <h1>フォーム examples</h1>
            <p class="lead">コピペ用のフォームのひな形です。</p>
        </div>
        <form>
            <div class="form-group">
                <label for="InputEmail">メール・アドレス</label>
                <input type="email" class="form-control" id="InputEmail" placeholder="メール・アドレスを入力して下さい。">
            </div>
            <div class="form-group">
                <label for="InputPassword">パスワード</label>
                <input type="password" class="form-control" id="InpusdsssssstPassword" placeholder="パスワードを入力して下さい。">
            </div>
            <div class="form-group">
                <label for="InputTextarea">要件</label>
                <textarea class="form-control" id="InputTextarea" placeholder="要件を入力して下さい。"></textarea>
            </div>
            <div class="form-group">
                <label for="InputSelect">選択</label>
                <select class="form-control" id="InputSelect">
                <option>選択肢１</option>
                <option>選択肢２</option>
                <option>選択肢３</option>
                </select>
            </div>
            <div class="form-group">
                <label for="InputFile">ファイル</label>
                <input type="file" id="InputFile">
                <p class="help-block">ヘルプ用ブロック。これはサンプルです。</p>
            </div>
            <div class="checkbox">
                <label>
                <input type="checkbox" value="checkboxA"> チェックボックスＡ
                </label>
            </div>
            <div class="checkbox">
                <label>
                <input type="checkbox" value="checkboxB"> チェックボックスＢ
                </label>
            </div>
            <div class="radio">
                <label>
                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1"> ラジオボタン１
                </label>
            </div>
            <div class="radio">
                <label>
                <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"> ラジオボタン２
                </label>
            </div>
            <button type="submit" class="btn btn-default">送信</button>
        </form>
    </div>
<!-- /container -->
</body>
</html>
