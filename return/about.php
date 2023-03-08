<?php include 'inc/header.php';
  // $heso =[
  //   [  
  //     'id' => '1',
  //     'name' => 'Bilal Aliyu',
  //     'email' => 'bilalaliyu@gmail.com',
  //     'message' => 'This is a good way to win',
  //   ],
  //   [
  //     'id' => '2',
  //     'name' => 'Abba Jibril',
  //     'email' => 'abbagibril@gmail.com',
  //     'message' => 'This is a good way to lose',
  //   ],
  //   [
  //     'id' => '3',
  //     'name' => 'Alamin Masu',
  //     'email' => 'alaminmasu@gmail.com',
  //     'message' => 'This is a good way to sleep',
  //   ]
  //   ];
    // echo $heso[1]['email'];
    $sql = 'SELECT * FROM fedback';
    $result = mysqli_query($conn, $sql);
    $heso = mysqli_fetch_all($result, MYSQLI_ASSOC);




?>

                <div class="abot-hd">
                    <h1 class="mgtp text-align">About Traversy Media</h1>
                </div>
                <?php if(empty($heso)): ?>
                      <p>There are no Feedback</p>
                    <?php endif; ?>
                <?php foreach($heso as $item): ?>
                <div class="abot-exp text-align">
                   <p class="fircol text-align">
                    <?php echo $item['body']; ?>
                    By <?php echo $item['name']; ?>
                   </p> 
                </div>
                <?php endforeach; ?>

                <?php include 'inc/footer.php'; ?>
