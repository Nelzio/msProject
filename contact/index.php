
<?php
/***
*percebi que qeur guardar os dados na bd, 
*o codigo abaixo pode nao ser considerado
***/


//Exemplo de como eviar email

function emailSend()
{
    $from = $_POST['email'];
    $to = 'workshop@msn3twork.com';
    $subject = "Participante".$_POST['name'];
    $message = "Inscricao do email".$_POST['email'];
    $headers = 'From: ' . $from . "\r\n" .
        'Reply-To: ' . $from . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    return mail($to, $subject, $message, $headers);
}

if(emailSend()==true){
    echo "
        <div class='modal-body'>
			<h2>Mensagem Enviada</h2>
			<p>Obrigado por Inscrever-se</p>
		</div>
		";
}
