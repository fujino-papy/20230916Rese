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
              <li class="menu__item">
                <a class="menu__link" href="/home">Home</a>
              </li>
              <li class="menu__item">
                <a class="menu__link" href="/register">Registration</a>
              </li>
              <li class="menu__item">
                <a class="menu__link" href="/login">Login</a>
              </li>
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