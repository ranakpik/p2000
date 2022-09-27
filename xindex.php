<?php include('header.php');?>
  <!-- News Overview Section -->
  <main class="main-content bg-dark-white">
    <section class="news-overview-sec bg-lightgrey">
      <div class="container map-overlay sec-padding">
        <button class="news-list-btn mobile-only" id="news-btn">Selecteer je regio <img src="img/icon-angle-down.svg" alt=""/></button>

        <div class="row" id="news-list">
          <div class="col col-md-3">
            <div class="news-list">
              <ul>
                <li class="active"><a href="">Amsterdam</a></li>
                <li><a href="">Arnhem</a></li>
                <li><a href="">Bollenstreek</a></li>
                <li><a href="">Brabant-Noord</a></li>
                <li><a href="">Brabant-Zuid</a></li>
                <li><a href="">Drenthe</a></li>
              </ul>
            </div>
          </div>
          <div class="col col-md-3">
            <div class="news-list">
              <ul>
                <li><a href="">Friesland</a></li>
                <li><a href="">Gelderland-Midden</a></li>
                <li><a href="">Gelderland-Zuid</a></li>
                <li><a href="">Gooi en Vechtstreek</a></li>
                <li><a href="">Haaglanden</a></li>
                <li><a href="">Hoeksche Waard</a></li>
              </ul>
            </div>
          </div>
          <div class="col col-md-3">
            <div class="news-list">
              <ul>
                <li><a href="">Hollandse Midden</a></li>
                <li><a href="">Ijsseland</a></li>
                <li><a href="">Kennemersland</a></li>
                <li><a href="">Limburg-Zuid</a></li>
                <li><a href="">Midden en West</a></li>
                <li><a href="">Noord en Oost</a></li>
              </ul>
            </div>
          </div>
          <div class="col col-md-3">
            <div class="news-list">
              <ul>
                <li><a href="">Noord-Holland</a></li>
                <li><a href="">Rotterdam-Rijnmond</a></li>
                <li><a href="">Twente</a></li>
                <li><a href="">Utrecht</a></li>
                <li><a href="">Zaandstad</a></li>
                <li><a href="">Zuid-Holland</a></li>
              </ul>
            </div>
          </div>
          <div class="col col-md-3">
            <div class="news-list">
              <ul>
                <li><a href="">Flevoland</a></li>
                <li><a href="">Shoarmaland</a></li>
                <li><a href="">Zuud</a></li>
                <li><a href="">Apeldoorn</a></li>
                <li><a href="">Nijmegen</a></li>
                <li><a href="">Ijsseland</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--/ News Overview Section -->
    <!--Location call to action section-->
    <section class="call-to-action">
      <div class="container">
        <div class="row d-flex align-items-center call-to-row box-shadow bg-white-gray">
          <div class="col-md-8 col-xs-7">
            <div class="location-search-form">
              <input type="search" name="placename" placeholder="Zoek op plaatsnaam" />
            </div>
          </div>
          <div class="col-md-4 col-xs-5">
            <div class="call-to-link textright">
              <button class="button text-locator" href="">Mijn locatie</button>
            </div>
          </div>
        </div> 
      </div>
    </section>
    <!--/ Location call to action section-->
    <!--Location call to action section-->
    <section class="form-heading-sec mobile-only sec-padding pb-0">
      <div class="container">
        <div class="row d-flex align-items-center">
          <div class="col-md-6 col-xs-6">
            <div class="mobile-step-heading">
              <h2 class="sec-heading">P2000 meldingen</h2>
            </div>
          </div>
          <div class="col-md-6 col-xs-6">
            <div class="button-form-mobile textright">
              <button href=""class="button btn-form btn-gradient" id="form-btn">Mijn locatie</button>
            </div>
          </div>
        </div> 
      </div>
    </section>
    <!--/ Location call to action section-->


    <!-- Form Section-->
    <section class="form-section search-form sec-padding" id="search-from">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6 col-sx-6">
            <div class="form-group input-date wrapper">
              <label for="datepicker" class="bg-dark-white">
                <span class="input-icon icon-date date-icon"></span>
                <input type="text" id="datepicker" autocomplete="off" placeholder="Selecteer datum">
              </label>	
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-sx-6">
            <div class="form-group input-select map">
                <span class="input-icon icon-map map-icon"></span>
                <select name="county" id="county" class="custom-select sources" placeholder="Selecteer provincie">
                  <option value="Friesland">Friesland</option>
                  <option value="Groningen">Groningen</option>
                  <option value="Overijssel">Overijssel</option>
                  <option value="Enschede">Enschede</option>
                  <option value="Gelderland">Gelderland</option>
                  <option value="Limburg">Limburg</option>
                  <option value="Noord-Brabant">Noord-Brabant</option>
                  <option value="Zeeland">Zeeland</option>
                  <option value="Utrecht">Utrecht</option>
                  <option value="Zuid-Holland">Zuid-Holland</option>
                  <option value="Noord-Holland">Noord-Holland</option>
                  <option value="Flevoland">Flevoland</option>
                </select>	
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-sx-6">
            <div class="form-group input-select">
                <span class="input-icon icon-shipping track-icon"></span>
                <select name="emergencyService" id="emergencyService" class="custom-select sources" placeholder="Selecteer hulpdienst">
                  <option value="Friesland">Ambulance</option>
                  <option value="Groningen">Brandweer</option>
                  <option value="Overijssel">Politie</option>
                  <option value="Enschede">Lifeliner</option>
                  <option value="Gelderland">Kustwacht</option>
                  <option value="Limburg">Brugwachter</option>
                  <option value="Noord-Brabant">Alle hulpdiensten</option>
                </select>	
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-sx-6">
            <div class="form-group submit-area">
                <button class="button btn-submit btn-gradient h-72" type="submit">Bekijk meldingen (10.000)</button>
            </div>
          </div> 
        </div>
      </div>
    </section>
    <!-- / Form Section-->


    <!-- / Step Section-->
    <section class="step-section sec-padding pt-0">
      <div class="container">
        <h2 class="sec-heading desktop-only">P2000 meldingen</h2>
          <div class="step-wrapper">
            <ol class="timeline">
              <li class="timeline-item">
                <div class="timeline-content">
                  <div class="news-item box-shadow border-radius">
                    <img class="news-icon" src="img/news-icon.png" alt="" />
                    <div class="news-content">
                      <h4><span class="primary-color">Brandweer</span> met gepaste spoed </h4>
                      <p class="place">
                        <span class="place-title primary-color">Plaatsnaam</span>
                        <span class="place-name">Nederland</span>
                      </p>
                      <a href="" class="button action-button">Brandweer</a>
                    </div>
                  </div>
                </div>
                <time>16:40</time>
              </li>
              <li class="timeline-item">
                <div class="timeline-content">
                  <div class="news-item box-shadow border-radius">
                    <img class="news-icon" src="img/news-icon.png" alt="" />
                    <div class="news-content">
                      <h4><span class="primary-color">Brandweer</span> met gepaste spoed </h4>
                      <p class="place">
                        <span class="place-title primary-color">Plaatsnaam</span>
                        <span class="place-name">Nederland</span>
                      </p>
                      <a href="" class="button action-button">Brandweer</a>
                    </div>
                  </div>
                </div>
                <time>16:40</time>
              </li>
              <li class="timeline-item">
                <div class="timeline-content">
                  <div class="news-item box-shadow border-radius">
                    <img class="news-icon" src="img/news-icon.png" alt="" />
                    <div class="news-content">
                      <h4><span class="primary-color">Brandweer</span> met gepaste spoed </h4>
                      <p class="place">
                        <span class="place-title primary-color">Plaatsnaam</span>
                        <span class="place-name">Nederland</span>
                      </p>
                      <a href="" class="button action-button">Brandweer</a>
                    </div>
                  </div>
                </div>
                <time>16:40</time>
              </li>
              <li class="timeline-item">
                <div class="timeline-content">
                  <div class="news-item box-shadow border-radius">
                    <img class="news-icon" src="img/news-icon.png" alt="" />
                    <div class="news-content">
                      <h4><span class="primary-color">Brandweer</span> met gepaste spoed </h4>
                      <p class="place">
                        <span class="place-title primary-color">Plaatsnaam</span>
                        <span class="place-name">Nederland</span>
                      </p>
                      <a href="" class="button action-button">Brandweer</a>
                    </div>
                  </div>
                </div>
                <time>16:40</time>
              </li>
              <li class="timeline-item">
                <div class="timeline-content">
                  <div class="news-item box-shadow border-radius">
                    <img class="news-icon" src="img/news-icon.png" alt="" />
                    <div class="news-content">
                      <h4><span class="primary-color">Brandweer</span> met gepaste spoed </h4>
                      <p class="place">
                        <span class="place-title primary-color">Plaatsnaam</span>
                        <span class="place-name">Nederland</span>
                      </p>
                      <a href="" class="button action-button">Brandweer</a>
                    </div>
                  </div>
                </div>
                <time>16:40</time>
              </li>
              <li class="timeline-item">
                <div class="timeline-content">
                  <div class="news-item box-shadow border-radius">
                    <img class="news-icon" src="img/news-icon.png" alt="" />
                    <div class="news-content">
                      <h4><span class="primary-color">Brandweer</span> met gepaste spoed </h4>
                      <p class="place">
                        <span class="place-title primary-color">Plaatsnaam</span>
                        <span class="place-name">Nederland</span>
                      </p>
                      <a href="" class="button action-button">Brandweer</a>
                    </div>
                  </div>
                </div>
                <time>16:40</time>
              </li>
              <li class="timeline-item">
                <div class="timeline-content">
                  <div class="news-item box-shadow border-radius news-ad-sec" style="background-image:url(img/add-img.jpg);">
                    <div class="news-content">
                      <h2 class="new-ad-heading">Dit is een placeholder voor reclame</h2>
                    </div>
                  </div>
                </div>
                <time>16:40</time>
              </li>
              <li class="timeline-item">
                <div class="timeline-content">
                  <div class="news-item box-shadow border-radius">
                    <img class="news-icon" src="img/news-icon.png" alt="" />
                    <div class="news-content">
                      <h4><span class="primary-color">Brandweer</span> met gepaste spoed </h4>
                      <p class="place">
                        <span class="place-title primary-color">Plaatsnaam</span>
                        <span class="place-name">Nederland</span>
                      </p>
                      <a href="" class="button action-button">Brandweer</a>
                    </div>
                  </div>
                </div>
                <time>16:40</time>
              </li>
              <li class="timeline-item">
                <div class="timeline-content">
                  <div class="news-item box-shadow border-radius">
                    <img class="news-icon" src="img/news-icon.png" alt="" />
                    <div class="news-content">
                      <h4><span class="primary-color">Brandweer</span> met gepaste spoed </h4>
                      <p class="place">
                        <span class="place-title primary-color">Plaatsnaam</span>
                        <span class="place-name">Nederland</span>
                      </p>
                      <a href="" class="button action-button">Brandweer</a>
                    </div>
                  </div>
                </div>
                <time>16:40</time>
              </li>
              <li class="timeline-item">
                <div class="timeline-content">
                  <div class="news-item box-shadow border-radius">
                    <img class="news-icon" src="img/news-icon.png" alt="" />
                    <div class="news-content">
                      <h4><span class="primary-color">Brandweer</span> met gepaste spoed </h4>
                      <p class="place">
                        <span class="place-title primary-color">Plaatsnaam</span>
                        <span class="place-name">Nederland</span>
                      </p>
                      <a href="" class="button action-button">Brandweer</a>
                    </div>
                  </div>
                </div>
                <time>16:40</time>
              </li>
              <li class="timeline-item">
                <div class="timeline-content">
                  <div class="news-item box-shadow border-radius">
                    <img class="news-icon" src="img/news-icon.png" alt="" />
                    <div class="news-content">
                      <h4><span class="primary-color">Brandweer</span> met gepaste spoed </h4>
                      <p class="place">
                        <span class="place-title primary-color">Plaatsnaam</span>
                        <span class="place-name">Nederland</span>
                      </p>
                      <a href="" class="button action-button">Brandweer</a>
                    </div>
                  </div>
                </div>
                <time>16:40</time>
              </li>
              <li class="timeline-item">
                <div class="timeline-content">
                  <div class="news-item box-shadow border-radius">
                    <img class="news-icon" src="img/news-icon.png" alt="" />
                    <div class="news-content">
                      <h4><span class="primary-color">Brandweer</span> met gepaste spoed </h4>
                      <p class="place">
                        <span class="place-title primary-color">Plaatsnaam</span>
                        <span class="place-name">Nederland</span>
                      </p>
                      <a href="" class="button action-button">Brandweer</a>
                    </div>
                  </div>
                </div>
                <time>16:40</time>
              </li>
              <li class="timeline-item">
                <div class="timeline-content">
                  <div class="news-item box-shadow border-radius news-ad-sec" style="background-image:url(img/add-img.jpg);">
                    <div class="news-content">
                      <h2 class="new-ad-heading">Dit is een placeholder voor reclame</h2>
                    </div>
                  </div>
                </div>
                <time>16:40</time>
              </li>
              <li class="timeline-item">
                <div class="timeline-content">
                  <div class="news-item box-shadow border-radius">
                    <img class="news-icon" src="img/news-icon.png" alt="" />
                    <div class="news-content">
                      <h4><span class="primary-color">Brandweer</span> met gepaste spoed </h4>
                      <p class="place">
                        <span class="place-title primary-color">Plaatsnaam</span>
                        <span class="place-name">Nederland</span>
                      </p>
                      <a href="" class="button action-button">Brandweer</a>
                    </div>
                  </div>
                </div>
                <time>16:40</time>
              </li>
              <li class="timeline-item">
                <div class="timeline-content">
                  <div class="news-item box-shadow border-radius">
                    <img class="news-icon" src="img/news-icon.png" alt="" />
                    <div class="news-content">
                      <h4><span class="primary-color">Brandweer</span> met gepaste spoed </h4>
                      <p class="place">
                        <span class="place-title primary-color">Plaatsnaam</span>
                        <span class="place-name">Nederland</span>
                      </p>
                      <a href="" class="button action-button">Brandweer</a>
                    </div>
                  </div>
                </div>
                <time>16:40</time>
              </li>
              <li class="timeline-item">
                <div class="timeline-content">
                  <div class="news-item box-shadow border-radius">
                    <img class="news-icon" src="img/news-icon.png" alt="" />
                    <div class="news-content">
                      <h4><span class="primary-color">Brandweer</span> met gepaste spoed </h4>
                      <p class="place">
                        <span class="place-title primary-color">Plaatsnaam</span>
                        <span class="place-name">Nederland</span>
                      </p>
                      <a href="" class="button action-button">Brandweer</a>
                    </div>
                  </div>
                </div>
                <time>16:40</time>
              </li>
              <li class="timeline-item">
                <div class="timeline-content">
                  <div class="news-item box-shadow border-radius news-ad-sec" style="background-image:url(img/add-img.jpg);">
                    <div class="news-content">
                      <h2 class="new-ad-heading">Dit is een placeholder voor reclame</h2>
                    </div>
                  </div>
                </div>
                <time>16:40</time>
              </li>
            </ol>
          </div>
      </div>
    </section>
    <!-- / Step Section-->
</main>
<?php include('footer.php');?>
