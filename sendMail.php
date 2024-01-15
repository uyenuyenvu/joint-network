<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Access the form fields via $_POST superglobal
    $name = $_POST['name'];
    $leader = $_POST['leader'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    switch ($_POST['type_contact']) {
        case 1:
            $type_contact ='人材派遣（長期）' ;
            break;
        case 2:
            $type_contact ='人材派遣（短期）' ;
            break;
        case 3:
            $type_contact ='パートタイム派遣' ;
            break;
        case 4:
            $type_contact ='シニア派遣' ;
            break;
        case 5:
            $type_contact ='紹介予定派遣' ;
            break;
        default:
            $type_contact ='人材紹介' ;
            break;
    }
    switch ($_POST['type_require']) {
        case 1:
            $type_require ='電話' ;
            break;
        case 2:
            $type_require ='メール' ;
            break;
        default:
            $type_contact ='どちらでも可' ;
            break;
    }
    $content = $_POST['content'];

    // Perform any necessary processing or validation on the form data
    // ...

    // Sender and recipient email addresses
    $sender = "sender@example.com";
    $recipient = "uyenvt.vnua@gmail.com";

// Email subject and body
    $subject = "「ホームページお問い合わせメールフォーム」からメールが届きました";
    $body = 'ok';
//    $body = "【 会社名 】 ".$name."
//            【 部署名 】 HR事業部
//            【 業界、商材 】
//            【 お名前 】 小澤　香里
//            【 メールアドレス 】 ".$email."
//            【 電話番号 】 ".$phone."
//            【 ご住所 】 ".$address."-21-9
//            【 ご検討中の職種 】 軽作業
//            【 お問合せ内容 】 ご担当者様
//
//            突然のご連絡失礼いたします。
//            株式会社エルグッドヒューマーの小澤と申します。
//
//            建設・土木経験不問の業務にて
//            ぜひ協業をご検討いただきたくご連絡をいたしました。
//            詳細は下記をご覧いただけますと幸いです。
//
//            ■場所　鹿児島県馬毛島周辺
//            ■開始　2024年2月スタート予定　※応相談
//            ■期間　開始～1年以上
//            ■勤務時間
//            ・9時間拘束8時間勤務　※8:00～17:00
//            ・時間は変動の可能性あり ※時短が多い現場だが、金額は変動無し
//            ・4週8休
//            ■契約金額　15,000円/日
//            ■必要人数　100名以上（予定）
//            ■作業内容　重機稼働後の地ならしやゴミ撤去、除去、運搬
//            　　　　　　誰でもできる軽作業
//            ■条件
//            ・20～59歳
//            ・健全、健康な方 ※反社・メンタルヘルスにもご注意ください
//            ・移動費実費支給　※3カ月以上勤務実績あれば帰参時支給
//            ・宿舎無料（1人部屋）
//            ・勤務初日から雇用保険、社会保険に加入必須
//            ■契約形態　業務委託
//
//            ご参画のご連絡はもちろん、
//            ご不明な点等がございましたらお気軽にお問合せください。
//
//            何卒よろしくお願い申し上げます。
//            ";

// Additional email headers
    $headers = "From: $sender\r\n";
    $headers .= "Reply-To: $sender\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=utf-8\r\n";

// Send the email
    if (mail($recipient, $subject, $body, $headers)) {
        $response= "Email sent successfully!";
    } else {
        $response= "Failed to send email.";
    }
    // Return a response
    echo $response;
}
?>
