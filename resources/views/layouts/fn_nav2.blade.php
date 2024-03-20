@once
@push('customStyle')
<style>
  [class^='publicNav'] [class*='logoDiv']{
    top: 40px;
    left: 40px;
  }
  [class^='publicNav'] [class*='closeText']{
    display: none;
  }
  [class^='publicNav'] [class*='menusDiv']{
    top: 0;
    right: 0;
  }
  [class^='publicNav'] [class*='menusDiv']::before{
    content: '';
    width: 0;
    height: 100vh;
    background: #212121;
    position: absolute;
    top: 0;
    right: 0;
    z-index: 1;
    transition: width .5s ease-in-out;
  }
  [class^='publicNav'] [class*='content']{
    top: 30px;
    left: -60px;
  }
  [class^='publicNav'] [class*='menusDiv'] .menusIcon{
    width: 63px;
  }
  [class^='publicNav'] [class*='menusDiv'] .menusItemDiv{
    list-style: none;
    padding: 0;
    margin: 0;
    margin-bottom: 42px;
    min-width: 110px;
  }
  [class^='publicNav'] .menusItemDiv a:hover [class*='menuText']{
    display: none;
  }
  [class^='publicNav'] .menusItemDiv a:hover [class*='closeText']{
    display: block;
  }
  [class^='publicNav'] .menusShopDiv a:hover [class*='menuText']{
    display: none;
  }
  [class^='publicNav'] .menusShopDiv a:hover [class*='closeText']{
    display: block;
  }
  [class^='publicNav'] .menusShopDiv a:hover{
    background: #fff;
  }
  [class^='publicNav'] .menusShopDiv a:hover p{
    color: #212121;
  }
  /*[class*='menusDiv'].active [class*='menuText']{
    display: none;
  }
  [class*='menusDiv'].active [class*='closeText']{
    display: block;
  } */
  [class^='publicNav'] [class*='publicHamburger']{
    width: 63px;
    height: 40px;
  }
  [class^='publicNav'] [class*='publicHamburger'] span {
    width: 100%;
    height: 3px;
    position: relative;
    background: #fff;
    display: block;
    transition: background .5s;
    border-radius: 30px;
  }
  [class^='publicNav'] [class*='publicHamburger'] span:before,
  [class^='publicNav'] [class*='publicHamburger'] span:after {
    content: '';
    width: 100%;
    height: 100%;
    border-radius: 30px;
    background: #fff;
    transform: translateY(-380%);
    position: absolute;
    left: 0;
    transition: transform .3s;
  }
  [class^='publicNav'] [class*='publicHamburger'] span:after {
    transform: translateY(380%);
  }
  [class^='publicNav'] [class*='menusDiv'].active  [class*='publicHamburger'] span:after {
    transform: rotate(30deg);
  }
  [class^='publicNav'] [class*='menusDiv'].active  [class*='publicHamburger'] span:before {
    transform: rotate(-30deg);
  }
  [class^='publicNav'] [class*='menusDiv'].active  [class*='publicHamburger'] span {
    background: transparent;
  }
  /*[class*='menusDiv'].active [class*='menuText']{
    display: none;
  }
  [class*='menusDiv'].active [class*='closeText']{
    display: block;
  } */
  [class^='publicNav'] [class*='menusDiv'].active::before{
    width: 408px;
  }
  @media (max-width: 920px){
    [class^='publicNav'] [class*='logo2Div']{
      display: none;
    }
    [class^='publicNav'] [class*='logoDiv']{
      width: 160px;
      top: 24px;
      left: 20px;
    }
    [class^='publicNav'] [class*='content']{
      top: 24px;
      left: -38px;
    }
  }
  @media (max-width: 780px){
    [class^='publicNav'] [class*='logoDiv']{
      top: 24px;
      left: 20px;
    }
    [class^='publicNav'] .menusShopDiv,
    [class^='publicNav'] .menusItemDiv{
      display: none;
    }
    [class^='publicNav'] [class*='menusDiv'].active .menusItemDiv,
    [class^='publicNav'] [class*='menusDiv'].active .menusShopDiv{
      display: block;
    } 
    [class^='publicNav'] [class*='menusDiv'].active::before{
      width: 100vw;
    }
  }
</style>
@endpush
@endonce
@once
@push('customScript')
<script>
  const isActiveFn = () => {
    const publicNav = document.querySelector('.publicNav')
    const menusDiv = publicNav.querySelector('.menusDiv_pof_zi99')
    const as = publicNav.querySelectorAll('.menusItemDiv a')
    if(menusDiv.classList.contains('active')){
      menusDiv.classList.remove('active')
    }else{
      menusDiv.classList.add('active')
    }
    as.forEach(element => {
      element.addEventListener('click',function(){
        menusDiv.classList.remove('active')
      })
    });
  }
</script>
@endpush
@endonce
<div class="publicNav">
  <div class="logoDiv_pof_zi100" data-aos="fade" data-aos-delay="200" data-aos-duration="1000">
    <a href="#home_header">
      <div class="img">
        <img class="_fluid" src="{{ URL::asset(env('MIX_IMGPREFIX')).'/home_logo.png?'.rand() }}">
      </div>
    </a>  
  </div>
  <div class="menusDiv_pof_zi99">
    <div class="menusDivBg">
    </div>
    <div class="content_por_tar_zi2">
      <div data-aos="fade" data-aos-delay="300" data-aos-duration="1000">
        <div class="menusIconDiv_dif_jce_mab48">
          <div class="menusIcon" onclick="isActiveFn()">
            <div class="publicHamburger_dif_aic_cup">
              <span></span>
            </div>
            <p class="menuText_coWhite_tac_text16_ls2_lhn">MENU</p>
            <p class="closeText_coWhite_tac_text16_ls2_lhn">CLOSE</p>
          </div>
        </div>
        <ul class="menusItemDiv">
          <li><a href="#home_header"><p class="menuText_text16_coWhite_ls1">HOME</p><p class="closeText_text16_coWhite_ls1">首頁</p></a></li>
          <li><a href="#home_store"><p class="menuText_text16_coWhite_ls1">STORY</p><p class="closeText_text16_coWhite_ls1">品牌故事</p></a></li>
          <li><a href="#home_news"><p class="menuText_text16_coWhite_ls1">NEWS</p><p class="closeText_text16_coWhite_ls1">最新消息</p></a></li>
          <li><a href="#home_commodity"><p class="menuText_text16_coWhite_ls1">PRODUCTS</p><p class="closeText_text16_coWhite_ls1">人氣商品</p></a></li>
          <li><a href="#home_connection"><p class="menuText_text16_coWhite_ls1">CONTACT US</p><p class="closeText_text16_coWhite_ls1">聯絡我們</p></a></li>
        </ul>
        <div class="menusShopDiv">
          <a class="_btn" href="https://oaostyle.cashier.ecpay.com.tw" target="_black"><p class="menuText">SHOP</p><p class="closeText">線上商店</p></a>
        </div>
      </div>
    </div>
  </div>
</div>
