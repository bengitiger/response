<?php
include_once './common/_common.php';
include_once 'layout/_head.php';
?>

<div class="container">

  <div class="loginlayout">
    <div class="loginbox">





      <div id="mb_login" class="mbskin">
        <h1 id="tmtitle">
          <span class="tmtitle4">OWEB.co.kr</span>
        </h1>
        <span id="toptitle"><span class="toptitle4">희망이 있기에 오늘도 열심히 달리는 당신</span></span>
        <form name="flogin" action="http://test1.oweb.co.kr/bbs/login_check.php" onsubmit="return flogin_submit(this);" method="post">
          <input type="hidden" name="url" value="http://test1.oweb.co.kr">

          <fieldset id="login_fs">
            <img src="http://test1.oweb.co.kr/skin/member/bengi/img/4_logo.png?v=3" id="login_fs_logo" class="pngimg" style="display: block;">
            <legend>회원로그인</legend>
            <label for="login_id" class="login_id">회원아이디<strong class="sound_only"> 필수</strong></label> <input type="text" name="mb_id" id="login_id" required="" class="frm_input required" size="20" maxlength="20"> <label for="login_pw" class="login_pw">비밀번호<strong class="sound_only"> 필수</strong></label>
            <input type="password" name="mb_password" id="login_pw" required="" class="frm_input required" size="20" maxlength="20"> <input type="submit" value="로그인" class="btn_submit"> <input type="checkbox" name="auto_login" id="login_auto_login"> <label for="login_auto_login"
              id="login_auto_login_txt">자동로그인</label>
          </fieldset>


          <div class="btn_confirm">
            <a href="http://test1.oweb.co.kr/">메인</a> <a href="http://test1.oweb.co.kr/bbs/password_lost.php" target="_blank" id="login_password_lost" class="btn02">ID/PW 찾기</a> <a href="./register.php" class="btn01">회원가입</a>
          </div>

        </form>
      </div>
      
      
      
      
      

    </div>
  </div>

</div>


<?php
include_once 'layout/_tail.php';
?>