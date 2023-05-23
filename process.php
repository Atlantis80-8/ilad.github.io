<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $pertanyaan = $_POST["pertanyaan"];
  
  // Kirim email dengan jawaban
  $to = "abdiltabrani@gmail.com";
  $subject = "Jawaban Pertanyaan";
  $message = "Jawaban Pertanyaan: ".$pertanyaan;
  $headers = "From: website@example.com";
  
  if (mail($to, $subject, $message, $headers)) {
    echo "Jawaban telah dikirim melalui email.";
  } else {
    echo "Terjadi kesalahan dalam mengirim jawaban.";
  }
}
?>
