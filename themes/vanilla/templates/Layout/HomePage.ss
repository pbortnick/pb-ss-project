<div class="content-container">
  <article class="typography">
    <header>
      <h1>$Title</h1>
    </header>

    <div class="content">

      <% if HomePageSlides %>
        <section class="slider<% if AutoSlide %>autoslide<% end_if %>">
          <% loop Slides %>

            <div id="slide-{$Pos}" class="slide {$TextColor}-text $FirstLast<% if First %> current<% else %> hide<% end_if %>" style="background-image: url({$Image.Link});" data-slide="$Pos">

              <div class="inner">
                <% if Title %>
                  <h2>$Title</h2>
                <% end_if %>
              </div>

            </div>

          <% end_loop %>

          <% if HomePageSlides.Count > 1 %>

            <% if SliderNavType = 'PrevNext' %>
              <a class="fa fa-chevron-left slider-nav-arrow prev" href="javascript:void(0);" data-direction="prev"></a>
              <a class="fa fa-chevron-right slider-nav-arrow next" href="javascript:void(0);" data-direction="next"></a>
            <% else %>
              <nav class="slider-nav">

                <% loop HomePageSlides %>
                  <a href="javascript:void(0);" class="$FirstLast<% if First %> current<% end_if %>" data-slide="$Pos"></a>
                <% end_loop %>
              </nav>

            <% end_if %>
          <% end_if %>
        </section>
        <% end_if %>
    </div>
  </article>
</div>
