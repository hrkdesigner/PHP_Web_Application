<?php
session_start();
$error = "";


if (isset($_POST['submit'])) {
    if (isset($_POST['agree'])) {
        $_SESSION['agreement'] = "agreed";
        $_SESSION['agree'] = 'agree';
        header("Location: CustomerInfo.php");
        exit();
    } else {
        $error = "You must agree the terms and consitions";
        $_SESSION['agree'] = '';
        session_destroy();
    }
}

include("./common/header.php");

?>

<div class="container">
    <h1>Welcome to Build-Your-Dream-PC Store </h1>
    <h4>To start, please enter your name</h4>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat iure cum, nemo consectetur perspiciatis voluptas necessitatibus et nobis odio aliquam architecto provident eveniet neque? Laborum molestias perspiciatis soluta impedit perferendis porro optio pariatur a? Iste labore consequatur commodi distinctio rerum voluptate pariatur, accusamus, magni exercitationem aperiam dolore obcaecati amet voluptatibus. Tempora similique perspiciatis quam temporibus exercitationem nam quia totam ullam expedita maiores atque laudantium quidem, iusto consectetur magni officia ea dolorum cumque. Atque mollitia officia asperiores ratione dolore ad nobis pariatur quia est deserunt, dignissimos et delectus reiciendis voluptatum repudiandae. Asperiores iusto eos aliquam. Nisi, quis. Earum cupiditate impedit amet aspernatur id, iste enim quod eius, cumque facere maxime? Officiis vel velit laudantium at cupiditate? Molestias dignissimos doloremque odio ipsa, mollitia placeat ab, animi, cupiditate voluptatem eius ipsam! Vitae reiciendis tempore natus quia mollitia eius quas, autem quidem sequi nesciunt fuga dolores illo quam ipsam exercitationem ex deleniti repellat possimus, eligendi placeat voluptate iure. Unde dolorem totam sunt pariatur? Saepe quibusdam aut itaque, nemo incidunt dolor sint beatae quasi. Dolorem deleniti libero debitis, nesciunt omnis, provident voluptate laboriosam hic commodi ex nisi doloribus magni accusantium quam, ducimus necessitatibus quae incidunt a. Porro in fugit laudantium laborum omnis sequi impedit adipisci.</p>

    <br />
    <form action="Disclaimer.php" method="POST">
        <div>
            <?php $error? print('<p class="alert alert-danger">You must agree terms and consitions</p>') : "" ?>
            <input type="checkbox" name="agree" value="agree" <?php if (!empty($_SESSION['agree'])) echo ("checked = checked") ?> />
            <span>I have read and agree with the term of conditions</span>
        </div>
        <button class="btn btn-primary " type="submit" name="submit">Start</button>
    </form>
</div>

<?php include('./common/footer.php'); ?>


</html>