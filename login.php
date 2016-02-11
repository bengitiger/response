<?php
include_once './common/_common.php';
include_once 'layout/_head.php';
?>

<div class="container">
  <div class="row loginlayout">
    <div class="col-xs-12 col-lg-12 text-center loginbox">


      <div id="mb_login" class="mbskin">
        <h1 id="tmtitle">
          <span class="tmtitle4">BENGI LOGIN</span>
        </h1>
        <span id="toptitle"><span class="toptitle4">희망이 있기에 오늘도 열심히 달리는 당신</span></span>
        
        <form name="flogin" action="login_check.php" onsubmit="return flogin_submit(this);" method="post">
          <input type="hidden" name="url" value="">

          <div class="row">
            <div class="col-xs-12 col-lg-4 text-center">          
              
                <img src="/img/logo/logo.jpg" class="img-responsive center-to-left img-thumbnail">
                
            </div>
            <div class="col-xs-12 col-lg-8 text-left">
            
                <div class="form-group">
                  <label for="login_id">회원아이디</label>
                  <input type="text" class="form-control" id="mb_id" id="mb_id" placeholder="" size="20" maxlength="20" class="required">
                </div>

                <label for="login_pw" class="login_pw">비밀번호<strong class="sound_only"> 필수</strong></label>
                <input type="password" name="mb_password" id="login_pw" required="" class="frm_input required" size="20" maxlength="20"> 
                <input type="submit" value="로그인" class="btn_submit"> <input type="checkbox" name="auto_login" id="login_auto_login"> 
                <label for="login_auto_login" id="login_auto_login_txt">자동로그인</label>
                            
            </div>
            
          </div>
          


          <div class="btn_confirm">
              <a href="http://test1.oweb.co.kr/">메인</a> 
              <a href="http://test1.oweb.co.kr/bbs/password_lost.php" target="_blank" id="login_password_lost" class="btn02">ID/PW 찾기</a> 
              <a href="./register.php" class="btn01">회원가입</a>
          </div>

        </form>
        
      </div>



    </div>
  </div>
</div>

<?php
include_once 'layout/_tail.php';
?>