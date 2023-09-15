// main.js

$(document).ready(function () {
  // モーダルを開くボタンのクリックイベントを設定
  $('#js-open').click(function () {
    // モーダルを表示
    $('#js-modal').show();
    $('#js-overlay').show();
  });

      // HTMLコンテンツをモーダル内のmodal-content要素に挿入
    var htmlContent = `
      <div class="menu">
        <div class="menu-utilities">
          <nav>
            <ul class="menu_content">
              @if (Auth::check())
              <li class="menu__item">
                <a class="menu__link" href="/mypage">HOME</a>
              </li>
              <li class="menu__item">
                <form class="form" action="/logout" method="post">
                  @csrf
                  <button class="menu__button">Logout</button>
                </form>
              </li>
              <li class="menu__item">
                <a class="menu__link" href="/mypage">Mypage</a>
              </li>
              @endif
            </ul>
          </nav>
        </div>
      </div>
    `;

    // モーダル内のmodal-content要素にHTMLコンテンツを挿入
    $('#js-modal .modal-content').html(htmlContent);
});

  // モーダルを閉じるボタンのクリックイベントを設定
  $('#js-close').click(function () {
    // モーダルを非表示
    $('#js-modal').hide();
    $('#js-overlay').hide();
  });