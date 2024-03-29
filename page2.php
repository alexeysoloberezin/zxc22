<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/font3.css">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="selectoplati.css">
  <title>Document</title>
</head>
 
<body>
  
  <div class="wrapper"> 
    <div class="window2"></div>   
    <div class="window">
      <div class="container">
        <div class="popup">
          <div class="popup__close"></div>
          <h3 class="popup__title">Заказать звонок</h3>
          <p class="popup__text">Введите номер вашего телефона и мы   
            свяжемся с вами в ближайшее время.</p>
          <div class="wrappper-input input-error wrappper-input-ok">
            <input class="popup__inp" type="text" placeholder="Телефон">
            <p class="wrappper-input-error">Ой, Вы ввели неполный номер</p>
          </div>
          
          <button class="popup__btn">Заказать</button>
          <p class="popup__ps">Нажимая на кнопку, вы даете согласие на обработку <a class="popup__link" href="#">персональных данных</a></p>
        </div>
      </div>      
    </div>     
    
    <header class="header">      
      <div class="header__top">
        <div class="container-big">
          <div class=" header__row header__row-line">
            <div class="burger">
                <span class="burger-line__top"></span>
                <span class="burger-line__center"></span>
                <span class="burger-line__bottom"></span>
              </div>
              <a href="/" class="header__logo">
                <img src="image/logo.svg" alt="">
              </a>
              <nav class="header__nav">
                <ul class="header__list">
                  <li class="header__item active">                                   
                    <a class="header__link" href="#">Результаты</a>
                  </li>
                  <li class="header__item">
                    <a class="header__link" href="#photo">Формат&nbsp;обучения</a>
                  </li>
                  <li class="header__item">
                    <a class="header__link" href="#video">Преподаватели</a>
                  </li>
                  <li class="header__item">
                    <a class="header__link" href="#certorder">Расписание</a>
                  </li>
                  <li class="header__item">
                    <a class="header__link" href="#contacts">Программа</a>
                  </li>
                  <li class="header__item">
                    <a class="header__link" href="#payment">Отзывы</a>
                  </li>
                  <li class="header__item">
                    <a class="header__link" href="#payment">Контакты</a>
                  </li>
                  <li class="header__item">
                    <a class="header__link blue" href="#payment">Записаться<img src="image/icon/icon_bron.svg" alt=""></a>
                  </li>
                  <li class="header__item">
                    <a class="header__link blue" href="#payment">Подарочный сертификат<img src="image/icon/gift.svg" alt=""></a>
                  </li>
                </ul>
              </nav>
              <div class="header__wrapper ">                  
                <p class="header__call">Заказать<span>&nbsp;</span> звонок</p>
                <a href="tel:88004444351" class="header__phone">8 (800) 444-43-51</a>
              </div>
          </div>
          <div class="breads">
            <div class="container-big">
              <ul class="breads__list">
                <li>
                  <a href="/"><img src="image/svg/home.svg" alt=""></a>
                </li>
                <li>
                  <a href="/">Курсы</a>
                </li>
                <li>
                  <a href="/">Оналайн-курс</a>
                </li>
              </ul>         
            </div>
          </div>
        </div>
      </div>
      <div class="container-big">
        <div class="header__body">   
          <a class="icon-certificate" href="#"><img src="image/icons/kg_icon_certificate_rotate.svg" alt=""></a>     
          <div class="header__main-img">
            <picture>
              <source srcset="image/resultats/Artem.webp" type="image/webp" media="(max-width:985px)">
              <source srcset="image/resultats/Artem.png" media="(max-width:985px)">
              <source srcset="image/Artem.webp" type="image/webp">
              <img src="image/Artem.png" alt="">
            </picture>
            <div class="header__main-img-name">              
              <p><span>Артём Держун</span><br>
                преподаватель курса</p>
            </div>
          </div>
          <div class="header__info">
            <h1 class="header__info-title">ОНЛАЙН-курс ораторского искусства<span class="mob-kostil">&emsp;</span> за <span>30 дней</span> </h1>
            <ul class="header__info-list">
              <li><img src="image/icon/checkmark.svg" alt="">Вы научитесь без стресса выступать на сцене и онлайн-формате.</li>
              <li><img src="image/icon/checkmark.svg" alt="">Вас обучат профессиональные педагоги сценической речи со стажем 18 лет.</li>
            </ul>
            <a href="#" class="global-btn header-btn">Участвовать <span></span></a>
            <ul class="header__info-list2">
              <li>
                <h3>старт курса</h3>
                <p><span>14 декабря</span><br> 
                  Длительность 30 дней
                </p>
              </li>
              <li>
                <h3 >формат</h3>
                <p>15 видеоуроков<br><span class="kostil2">,</span> 5 вебинаров по 60 минут<br>
                  Обратная связь по домашним заданиям
                </p>
              </li>
              <li>
                <h3>
                  <picture>
                    <source srcset="image/icon/Forbes_orange.png" media="(max-width:985px)">
                    <img src="image/icon/forbes.png" alt="">
                  </picture>                 
                </h3>
                <img class="recomended-orange" src="image/resultats/recomended.png" alt="">
                <p>Школа  КОРОЛЬ ГОВОРИТ!  – победитель конкурса журнала Forbes среди молодых компаний
                </p>
              </li>
            </ul>             
          </div>
          <div class="start-curse active">
            <div class="start-curse__close"></div>
            <p class="start-curse__title">СТАРТ КУРСА</p>
            <p class="start-curse__date">14 декабря</p>
            <a class="global-btn" href="#">Участвовать<span></span></a>
          </div>
        </div>
      </div>
      
        
     
    </header>    
    <main class="main">
      <section class="video">
        <div class="container"> 
          <h2 class="title">посмотрите видео</h2>
          <p class="subtitle">О наших занятиях и преподавателях</p>
          <div class="video__wrapper">               
              <?php if( stripos($_SERVER['HTTP_USER_AGENT'], 'Lighthouse') === false ){ ?>
                 <iframe id="video" class="main__video recalll__video" src="https://www.youtube.com/embed/57OmLh2-26A" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>          
              <?}?>    
            
              <img class="main__video-poster video-poster active" src="video/video.jpg" alt="">                    
          </div>
        </div>        
      </section>
      <section class="aboutcurse">
        <div class="container"> 
          <h2 class="title">курс создан для</h2>          
          <ul class="aboutcurse__list">
            <li>
              <h3>Руководителя</h3>
              <p>Быть убедительным на сцене и&nbsp;совещаниях</p>
              <img src="image/icon/1.png" alt="">
            </li>
            <li>
              <h3>Бизнес-тренера</h3>
              <p>Выразительно и энергично подавать материал</p>
              <img src="image/icon/2.png" alt="">
            </li>
            <li>
              <h3>Блогера</h3>
              <p>Заинтересовать онлайн- публику, научиться вести влоги и&nbsp;прямые эфиры</p>
              <img src="image/icon/3.png" alt="">
            </li>
            <li>
              <h3>Личности</h3>
              <p>Заинтересованной в собственном развитии</p>
              <img src="image/icon/4.png" alt="">
            </li>
          </ul>
        </div>        
      </section>
      <section class="resultcurse">
        <div class="container"> 
          <h2 class="title">Результаты курса</h2>          
          <div class="resultcurse__wrapper resultcurse__wrapper-start">
            <div class="resultcurse__info">
              <h3>1.&ensp;Интонационая<br> выразительность</h3>
              <p>Ваша речь перестанет быть монотонной и&nbsp;заиграет яркими красками!</p>
              <p class="resultcurse__info-ps">Сравните интонационную выразительность
                нашего&nbsp;студента ДО и ПОСЛЕ курса <img src="image/icon/redarrow.svg" alt="">
              </p>
            </div>
            <div class="resultcurse__inner">
              <a data-fancybox href="https://www.youtube.com/watch?v=_sI_Ps7JSEk&amp;autoplay=1&amp;rel=0&amp;controls=0&amp;showinfo=0" class="resultcurse__image ">
                <picture>
                  <source srcset="image/resultats/mob1.1.jpg" media="(max-width:640px)">              
                  <img src="image/resultats/11.jpg" alt="Интонационая выразительность ДО">
                </picture>
                <p class="resultcurse__mob-txt">Интонационная<br>
                  выразительность ДО</p>
              </a>
              <a data-fancybox href="https://www.youtube.com/watch?v=_sI_Ps7JSEk&amp;autoplay=1&amp;rel=0&amp;controls=0&amp;showinfo=0" class="resultcurse__image ">
                <picture>
                  <source srcset="image/resultats/mob1.2.jpg" media="(max-width:640px)">              
                  <img src="image/resultats/12.jpg" alt="Интонационая выразительность ДО">
                </picture>
                <p class="resultcurse__mob-txt">Интонационная<br>
                  выразительность ПОСЛЕ</p>
              </a>
            </div>
          </div>
          <div class="resultcurse__wrapper">
            <div class="resultcurse__info">
              <h3>2. Дикция</h3>
              <p>Перестанете глотать окончания. Улучшите дикцию и вместо "Тыща чек" будете говорить "Тысяча человек" ))</p>
              <p class="resultcurse__info-ps">Посмотрите, как натренировали дикцию наши&nbsp;студенты <img src="image/icon/redarrow.svg" alt=""></p>
            </div>
            <div class="resultcurse__inner">
              <a data-fancybox href="https://www.youtube.com/watch?v=_sI_Ps7JSEk&amp;autoplay=1&amp;rel=0&amp;controls=0&amp;showinfo=0" class="resultcurse__image ">
                <picture>
                  <source srcset="image/resultats/mob2.1.jpg" media="(max-width:640px)">              
                    <img src="image/resultats/21.jpg" alt="Дикция после курса">
                </picture>
                <p class="resultcurse__mob-txt">Дикция ПОСЛЕ курса</p>
              </a>
              <a data-fancybox href="https://www.youtube.com/watch?v=_sI_Ps7JSEk&amp;autoplay=1&amp;rel=0&amp;controls=0&amp;showinfo=0" class="resultcurse__image ">
                <picture>
                    <source srcset="image/resultats/mob2.2.jpg" media="(max-width:640px)">              
                    <img src="image/resultats/22.jpg" alt="Дикция после курса">
                </picture>             
                <p class="resultcurse__mob-txt">Дикция ПОСЛЕ курса</p>
              </a>
            </div>
          </div>
          <div class="resultcurse__wrapper">
            <div class="resultcurse__info">
              <h3>3. Самопрезентация</h3>
              <p>Научитесь грамотно рассказывать о себе в любой обстановке и на любую аудиторию</p>
              <p class="resultcurse__info-ps">Посмотрите, какую самопрезентацию создали наши&nbsp;студенты <img src="image/icon/redarrow.svg" alt=""></p>
            </div>
            <div class="resultcurse__inner">
              <a data-fancybox href="https://www.youtube.com/watch?v=_sI_Ps7JSEk&amp;autoplay=1&amp;rel=0&amp;controls=0&amp;showinfo=0" class="resultcurse__image ">
                <picture>
                  <source srcset="image/resultats/mob3.1.jpg" media="(max-width:640px)">              
                    <img src="image/resultats/31.jpg" alt="Самопрезентация">
                 </picture> 
                <p class="resultcurse__mob-txt">Самопрезентация</p>
              </a>
              <a data-fancybox href="https://www.youtube.com/watch?v=_sI_Ps7JSEk&amp;autoplay=1&amp;rel=0&amp;controls=0&amp;showinfo=0" class="resultcurse__image ">
                <picture>
                  <source srcset="image/resultats/mob3.2.jpg" media="(max-width:640px)">              
                    <img src="image/resultats/32.jpg" alt="Самопрезентация">
                 </picture>             
                 <p class="resultcurse__mob-txt">Самопрезентация</p>   
              </a>
            </div>
          </div>
          <div class="resultcurse__wrapper resultcurse__wrapper-4">
            <div class="resultcurse__info">
              <h3>4. Презентация на работе</h3>
              <p>Научитесь презентовать рабочие проекты и привлекать клиентов</p>
              <p class="resultcurse__info-ps">Посмотрите, какую презентацию компаний создали&nbsp;наши студенты <img src="image/icon/redarrow.svg" alt=""></p>
            </div>
            <div class="resultcurse__inner">
              <a data-fancybox href="https://www.youtube.com/watch?v=_sI_Ps7JSEk&amp;autoplay=1&amp;rel=0&amp;controls=0&amp;showinfo=0" class="resultcurse__image ">
                <picture>
                    <source srcset="image/resultats/mob4.1.jpg" media="(max-width:640px)">              
                    <img src="image/resultats/41.jpg" alt="Презентация услуг и преимуществ компании">
                 </picture> 
                 <p class="resultcurse__mob-txt">Презентация услуг и 
                  преимуществ компании</p> 

              </a>
              <a data-fancybox href="https://www.youtube.com/watch?v=_sI_Ps7JSEk&amp;autoplay=1&amp;rel=0&amp;controls=0&amp;showinfo=0" class="resultcurse__image ">
                <picture>
                  <source srcset="image/resultats/mob4.2.jpg" media="(max-width:640px)">              
                  <img src="image/resultats/42.jpg" alt="Презентация услуг и преимуществ компании">
               </picture> 
               <p class="resultcurse__mob-txt">Презентация товаров и 
                услуг компании</p> 
              </a>
            </div>
          </div>
          <div class="resultcurse__wrapper">
            <div class="resultcurse__info">
              <h3>5. Избавление от страха</h3>
              <p>Избавитесь от стресса перед публичным выступлением и поймете как волнение может помогать</p>
              <p class="resultcurse__info-ps">Послушайте рассказ нашей студентки<br> о страхе <img src="image/icon/redarrow.svg" alt=""></p>
            </div>
            <div class="resultcurse__inner">
              <a data-fancybox href="https://www.youtube.com/watch?v=_sI_Ps7JSEk&amp;autoplay=1&amp;rel=0&amp;controls=0&amp;showinfo=0" class="resultcurse__image ">
                <picture>
                  <source srcset="image/resultats/mob5.1.jpg" media="(max-width:640px)">              
                  <img src="image/resultats/51.jpg" alt="Как она поборола свой страх">
               </picture> 
               <p class="resultcurse__mob-txt">Как она поборола свой 
                страх</p> 
              </a>  
              <a href="#" class="resultcurse__image  " style="visibility: hidden;">
                <picture>
                  <source srcset="image/resultats/mob5.1.jpg" media="(max-width:640px)">              
                  <img src="image/resultats/51.jpg" alt="Как она поборола свой страх">
               </picture> 
               <p class="resultcurse__mob-txt">Как она поборола свой 
                страх</p> 
              </a>            
            </div>
          </div>
          <div class="resultcurse__wrapper">
            <div class="resultcurse__info">
              <h3>6. Онлайн-выступления</h3>
              <p>Научитесь выступать онлайн ярко и интересно</p>
              <p class="resultcurse__info-ps">Послушайте онлайн-выступления наших студентов <img src="image/icon/redarrow.svg" alt=""></p>
            </div>
            <div class="resultcurse__inner">
              <a data-fancybox href="https://www.youtube.com/watch?v=_sI_Ps7JSEk&amp;autoplay=1&amp;rel=0&amp;controls=0&amp;showinfo=0" class="resultcurse__image ">
                <picture>
                  <source srcset="image/resultats/mob6.1.jpg" media="(max-width:640px)">              
                    <img src="image/resultats/61.jpg" alt="Профессиональный эфир">
                </picture> 
                <p class="resultcurse__mob-txt">Профессиональный эфир</p>
              </a> 
              <a data-fancybox href="https://www.youtube.com/watch?v=_sI_Ps7JSEk&amp;autoplay=1&amp;rel=0&amp;controls=0&amp;showinfo=0" class="resultcurse__image ">
                <picture>
                    <source srcset="image/resultats/mob6.2.jpg" media="(max-width:640px)">              
                    <img src="image/resultats/62.jpg" alt="Первые сторис в Инстаграм">
                </picture>   
                <p class="resultcurse__mob-txt">Первые сторис в 
                  Инстаграм</p>            
              </a>                 
            </div>
          </div>
        </div>        
      </section>
      <div class="comment">
        <div class="container">
          <div class="comment__wrapper">
            <div class="comment__image">
              <picture>                
                <source srcset="image/resultats/comment-photo.webp" type="image/webp">
                  <img src="image/resultats/comment-photo.jpg" alt="Евгений Савельев">
              </picture>
            
            </div>
            <div class="comment__inner">
              <p class="comment__quote">«&ensp;Гарантирую,<br>
                Вы избавитесь от страха публичных
                выступлений. Почувствуете уверенность
                в&nbsp;себе и будете поражены, сравнивая видео
                своего первого и финального выступлений!&ensp;»
              </p>
              <p class="comment__name">Евгений Савельев</p>
              <p class="comment__position">Основатель школы "КОРОЛЬ ГОВОРИТ!"</p>
            </div>
          </div>
        </div>
      </div>
      <section class="nearcurse">
        <div class="container">
          <div class="nearcurse__wrapper">
            <h2 class="nearcurse__title">Ближайший онлайн-курс ораторского искусства</h2>
            <div class="nearcurse__inner">
              <div class="nearcurse__box">
                <h4>старт курса</h4>
                <p><span>14 декабря </span><br>
                  Длительность 30 дней
                </p>
              </div>
              <div class="nearcurse__box">
                <h4>формат</h4>
                <p>15 видеоуроков,<br>
                  5 вебинаров по 60 минут<br>
                  Обратная связь по домашним
                  заданиям
                </p>
              </div>
              <a class="global-btn" href="#">Участвовать <span></span></a>
            </div>
            <form class="nearcurse__form">
              <div class="wrappper-input input-error wrappper-input-ok">
                <input  class="nearcurse__phone" type="tel" placeholder="Телефон">
                <p class="wrappper-input-error">Ой, Вы ввели неполный номер</p>
              </div>
              <button class="nearcurse__btn">Заказать консультацию</button>
            </form>
            <p class="nearcurse__ps">Нажимая на кнопку, вы даете согласие на обработку <a href="#">персональных данных</a></p>
          </div>
        </div>
      </section>
      <section class="format">
        <div class="container">
          <h2 class="title">формат обучения</h2>   
          <ul class="format__list">
            <li>
              <div class="format__list-image">
                <img src="image/icon/video.svg" alt="">
              </div>
              <h3>15<br>
                Видеоуроков
              </h3>
              <p>От 10 до 20 минут
                с&nbsp;домашними заданиями</p>
            </li>
            <li>
              <div class="format__list-image">
                <img src="image/icon/webinar.svg" alt="">
              </div>  
              <h3>5 Живых вебинаров
                с&nbsp;преподавателем
              </h3>
              <p>Разборы типичных ошибок
                учеников, ответы на вопросы,
                изучение новых тем
              </p>
            </li>
            <li>
              <div class="format__list-image">
                <img src="image/icon/homework.svg" alt="">
              </div>  
              <h3>Домашние<br>
                задания
              </h3>
              <p>Вы записываете видео и аудио,
                преподаватель проверяет и дает
                индивидульную обратную связь
              </p>
            </li>
            <li>
              <div class="format__list-image">
                <img src="image/icon/command.svg" alt="">
              </div>
              <h3>Работа<br>
                в&nbsp;команде
              </h3>
              <p>Выступления перед другими 
                студентами, обратная связь,
                помощь и общение
              </p>
            </li>
          </ul>
        </div>
      </section>
      <section class="teachers">
        <div class="container">
          <h2 class="title">ПРЕПОДАВАТЕЛИ</h2>   
          <div class="teachers__slider slider">
            <div class="teachers__slide">              
              <div class="teachers__wrapper">
                <a  class="teachers__image" data-fancybox href="https://www.youtube.com/watch?v=_sI_Ps7JSEk&amp;autoplay=1&amp;rel=0&amp;controls=0&amp;showinfo=0">
                  <div class="teachers__image-photo">
                    <img  src="image/photo/sardovskaya.png" alt="">
                  </div>                         
                  <div class="teachers__link-video">
                    <p>Посмотреть видео</p>                    
                    <img src="image/icon/play_blue.svg" alt="">
                  </div>            
                </a>
                
                <div class="teachers__exp-wrapper">
                  <div class="teachers__exp-inner">
                    <h4 class="teachers__exp-title">19 <span>лет</span></h4>
                    <p>стаж
                      преподавания
                    </p>
                  </div>
                  <div class="teachers__exp-inner">
                    <h4 class="teachers__exp-title">1800</h4>
                    <p>и более
                      учеников
                    </p>
                  </div>
                </div>
              </div>
              <div class="teachers__info">
                <h3>Ирина Сардовская</h3>
                <p>Тренер по сценической речи и технике речи.</p>
                <p>Педагог сценической речи Института современного искусства.</p>
                <p>Педагог техники речи Школы телеведущих Останкино.</p>
                <p>Преподаватель искусства речи во ВГИКе им. С.А. Герасимова.</p>
                <p>Член союза театральных деятелей России.</p>
              </div> 
            </div>
            <div class="teachers__slide">           
              <div class="teachers__wrapper">
                <a data-fancybox href="https://www.youtube.com/watch?v=_sI_Ps7JSEk&amp;autoplay=1&amp;rel=0&amp;controls=0&amp;showinfo=0" class="teachers__image">
                  <div class="teachers__image-photo">
                    <img  src="image/photo/derzhun.png" alt="">
                  </div>                         
                  <div class="teachers__link-video">
                    <p>Посмотреть видео</p>                    
                    <img src="image/icon/play_blue.svg" alt="">
                  </div>            
                </a>
                
                <div class="teachers__exp-wrapper">
                  <div class="teachers__exp-inner">
                    <h4 class="teachers__exp-title">11 <span>лет</span> </h4>
                    <p>стаж
                      преподавания
                    </p>
                  </div>
                  <div class="teachers__exp-inner">
                    <h4 class="teachers__exp-title">1400</h4>
                    <p>и более
                      учеников
                    </p>
                  </div>
                </div>
              </div>
              <div class="teachers__info">
                <h3>Артём Держун</h3>
                <p>Тренер по ораторскому искусству, публичным выступлениям и технике речи.</p>
                <p>Обучил сотрудников более 50 крупных компаний: Tele2, Рос-Тур, AtlasTech, Vauth-Sagel  и др.</p>
                <p>Ведущий новостей на канале Матч ТВ.</p>
                <p>Радиоведущий Эхо Москвы.<br>Официальный голос ФК “Урал”.</p>
                
              </div>                        
            </div>
            <div class="teachers__slide">              
              <div class="teachers__wrapper">
                <a data-fancybox href="https://www.youtube.com/watch?v=_sI_Ps7JSEk&amp;autoplay=1&amp;rel=0&amp;controls=0&amp;showinfo=0" class="teachers__image">
                  <div class="teachers__image-photo">
                    <img  src="image/photo/sardovskaya.png" alt="">
                  </div>                         
                  <div class="teachers__link-video">
                    <p>Посмотреть видео</p>                    
                    <img src="image/icon/play_blue.svg" alt="">
                  </div>            
                </a>
                
                <div class="teachers__exp-wrapper">
                  <div class="teachers__exp-inner">
                    <h4 class="teachers__exp-title">19 <span>лет</span></h4>
                    <p>стаж
                      преподавания
                    </p>
                  </div>
                  <div class="teachers__exp-inner">
                    <h4 class="teachers__exp-title">1800</h4>
                    <p>и более
                      учеников
                    </p>
                  </div>
                </div>
              </div>
              <div class="teachers__info">
                <h3>Ирина Сардовская</h3>
                <p>Тренер по сценической речи и технике речи.</p>
                <p>Педагог сценической речи Института современного искусства.</p>
                <p>Педагог техники речи Школы телеведущих Останкино.</p>
                <p>Преподаватель искусства речи во ВГИКе им. С.А. Герасимова.</p>
                <p>Член союза театральных деятелей России.</p>
              </div> 
            </div>
            <div class="teachers__slide">           
              <div class="teachers__wrapper">
                <a data-fancybox href="https://www.youtube.com/watch?v=_sI_Ps7JSEk&amp;autoplay=1&amp;rel=0&amp;controls=0&amp;showinfo=0" class="teachers__image">
                  <div class="teachers__image-photo">
                    <img  src="image/photo/derzhun.png" alt="">
                  </div>                         
                  <div class="teachers__link-video">
                    <p>Посмотреть видео</p>                    
                    <img src="image/icon/play_blue.svg" alt="">
                  </div>            
                </a>
                
                <div class="teachers__exp-wrapper">
                  <div class="teachers__exp-inner">
                    <h4 class="teachers__exp-title">11 <span>лет</span> </h4>
                    <p>стаж
                      преподавания
                    </p>
                  </div>
                  <div class="teachers__exp-inner">
                    <h4 class="teachers__exp-title">1400</h4>
                    <p>и более
                      учеников
                    </p>
                  </div>
                </div>
              </div>
              <div class="teachers__info">
                <h3>Артём Держун</h3>
                <p>Тренер по ораторскому искусству, публичным выступлениям и технике речи.</p>
                <p>Обучил сотрудников более 50 крупных компаний: Tele2, Рос-Тур, AtlasTech, Vauth-Sagel  и др.</p>
                <p>Ведущий новостей на канале Матч ТВ.</p>
                <p>Радиоведущий Эхо Москвы.</p>
                <p>Официальный голос ФК “Урал”.</p>
              </div>                        
            </div>
            
          </div>
        </div>
      </section>
      <section class="students">
        <div class="container">
          <h2 class="title">их ученики:</h2>
          <div class="students__wrapper">
            <div class="students__innner">
              <div class="students__photo">                
                <picture>                  
                      <source srcset="image/photo/student1.webp" type="image/webp">
                    <img src="image/photo/student1.png" alt="">
                </picture> 
              </div>
              <h4>С. Гармаш</h4>
              <p>актёр, народный артист РФ</p>
            </div>  
            <div class="students__innner">
              <div class="students__photo">
                <picture>                  
                  <source srcset="image/photo/student2.webp" type="image/webp">
                <img src="image/photo/student2.png" alt="">
            </picture>
              </div>
              <h4>В. Машков</h4>
              <p>актёр, сценарист, кинопродюсер</p>
            </div> 
            <div class="students__innner">
              <div class="students__photo">
                <picture>                  
                  <source srcset="image/photo/student3.webp" type="image/webp">
                 <img src="image/photo/student3.png" alt="">
                </picture>
              </div>
              <h4>Е. Миронов </h4>
              <p>актёр, народный артист РФ</p>
            </div>           
          </div>
          <p class="students__text">и многие другие актеры и бизнесмены</p>
        </div>
      </section>
      <section class="nearcurse">
        <div class="container">
          <div class="nearcurse__wrapper">
            <h2 class="nearcurse__title">Ближайший онлайн-курс ораторского искусства</h2>
            <div class="nearcurse__inner">
              <div class="nearcurse__box">
                <h4>старт курса</h4>
                <p><span>14 декабря </span><br>
                  Длительность 30 дней
                </p>
              </div>
              <div class="nearcurse__box">
                <h4>формат</h4>
                <p>15 видеоуроков,<br>
                  5 вебинаров по 60 минут<br>
                  Обратная связь по домашним
                  заданиям
                </p>
              </div>
              <a class="global-btn" href="#">Участвовать <span></span></a>
            </div>
            <form class="nearcurse__form">
              <div class="wrappper-input input-error wrappper-input-ok">
                <input  class="nearcurse__phone" type="tel" placeholder="Телефон">
                <p class="wrappper-input-error">Ой, Вы ввели неполный номер</p>
              </div>
              <button class="nearcurse__btn">Заказать консультацию</button>
            </form>
            <p class="nearcurse__ps">Нажимая на кнопку, вы даете согласие на обработку <a href="#">персональных данных</a></p>
          </div>
        </div>
      </section>
      <section class="programm">
        <div class="container">
          <h2 class="title">программа курса</h2>
          <p class="subtitle">15 уроков, 5 вебинаров</p>
          <div class="programm__wrapper">
            <ul class="programm__list">
              <li>
                <h4><span>1.</span>Самопрезентация</h4>
                <p>Научитесь эффективно представлять себя и свою компанию</p>
              </li>
              <li>
                <h4><span>2.</span>Избавление от страха сцены</h4>
                <p>Устраните физические зажимы и волнение</p>
              </li>
              <li>
                <h4><span>3.</span>Жесты и позы</h4>
                <p>Научитесь жестикулировать и перемещаться по сцене</p>
              </li>
              <li>
                <h4><span>4.</span>Голос</h4>
                <p>Сформируете красивый тембр и сильный голос</p>
              </li>
              <li>
                <h4><span>5.</span>Дикция</h4>
                <p>Отработаете чистое правильное произношение</p>
              </li>
              <li>
                <h4><span>6.</span>Работа с камерой</h4>
                <p>Научитесь вести прямые эфиры и онлайн-совещания</p>
              </li>
              <li>
                <h4><span>7.</span>Структура выступления</h4>
                <p>Освоите приемы написания убедительных речей</p>
              </li>
              <li>
                <h4><span>8.</span>Интонационная выразительность</h4>
                <p>Ваша речь станет яркой и эмоциональной</p>
              </li>
            </ul>
            <ul class="programm__list programm__list-right">
              <li>
                <h4><span>9.</span>Ответы на вопросы</h4>
                <p>Научитесь отвечать на сложные и простые вопросы</p>
              </li>
              <li>
                <h4><span>10.</span>Сторителлинг</h4>
                <p>Начнете использовать истории в бизнесе и личной жизни</p>
              </li>
              <li>
                <h4><span>11.</span>Подготовка к публичному выступлению</h4>
                <p>Освоите алгоритм подготовки из 6 шагов</p>
              </li>
              <li>
                <h4><span>12.</span>Импровизация</h4>
                <p>Перестанете бояться спонтанных тем и вопросов</p>
              </li>
              <li>
                <h4><span>13.</span>Выступление в стиле TED</h4>
                <p>Подготовите выступление как у мировых звезд!</p>
              </li>
              <li>
                <h4><span>14.</span>Внешний вид спикера</h4>
                <p>Научитесь подбирать одежду для выступлений</p>
              </li>
              <li>
                <h4><span>15.</span>ТОП-10 техник курса</h4>
                <p>Превратите все полученные знания в новые привычки!</p>
              </li>              
            </ul>
          </div>
          <div class="programm__box">
            <div class="programm__info">
              <img src="image/icon/videoplayer.svg" alt="">
              <p>индивидуальная обратная связь<br>
                по вашим домашним заданиям от преподавателя</p>
            </div>
            <div class="programm__info programm__info-right">
              <img src="image/icon/certificate.svg" alt="">
              <p>Сертификат<br>
                об окончании курса</p>
            </div>
          </div>
        </div>
      </section>
      <section class="recalll">
        <div class="container">
          <h2 class="title">отзывы о курсе</h2>
          <div class="video__wrapper">
            <?php if( stripos($_SERVER['HTTP_USER_AGENT'], 'Lighthouse') === false ){ ?>
            <iframe id="video2" class="main__video recalll__video" src="https://www.youtube.com/embed/57OmLh2-26A" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>          
            <?}?>    

            
            <img class="video-poster video-poster__2 active" src="image/Videoplay.jpg" alt="">
          </div>
          <div class="recalll__slider slider">
            <div class="recalll__slide">
              <div class="recalll__slide-box">
                <div class="recalll__slide-wrapper">
                  <div class="recalll__slide-imager">
                    <picture>                  
                      <source srcset="image/photo/dyakonov.webp" type="image/webp">
                        <img src="image/photo/dyakonov.png" alt="">
                    </picture>
                  </div>
                  
                </div>
                <div class="recalll__slide-inner">
                  <div class="recalll__slide-title">Подготовил лучшее выступление
                    для форума «Winning the Hearts»
                  </div>
                  <p class="recalll__slide-txt">Организаторы форума «Winning the Hearts» пригласили меня выступить и порекомендовали подготовиться со школой «КОРОЛЬ ГОВОРИТ!». Мне показалось это дикостью, я часто выступаю, зачем мне заниматься?
                    <br>  Не смотря на моё изначальное сопротивление, Дмитрий помог мне выбрать тему и понять, почему мне важно ее раскрыть. Мы сфокусировались на выступлении и получилось очень сильно! Без этой подготовки выступление было бы не просто другим, оно было бы хуже. Спасибо большое Дмитрию Макееву и школе «КОРОЛЬ ГОВОРИТ!».</p>
                  <div class="recalll__slide-avtor ">
                    <img class="recalll__slide-img1" src="image/photo/Logocall.jpg" alt="">
                    <div class="recalll__slide-case">
                      <p class="recalll__slide-name">БОРИС ДЬЯКОНОВ</p>
                      <p class="recalll__slide-position">Руководитель банка “Точка”</p>
                    </div>
                  </div>
                </div>
                
              </div>             
              
            </div>
            <div class="recalll__slide">
              <div class="recalll__slide-box">
                <div class="recalll__slide-wrapper">
                  <div class="recalll__slide-imager">
                    <picture>                  
                      <source srcset="image/photo/kruglov.webp" type="image/webp">
                        <img src="image/photo/kruglov.png" alt="">
                    </picture>                   
                  </div>
                </div>
                <div class="recalll__slide-inner">
                  <div class="recalll__slide-title">Стал смело выступать <br>
                    на аудиторию до 100 человек!
                  </div>
                  <p class="recalll__slide-txt">На курс меня привела сложная ситуация: мне пришлось выступить перед 50 людьми, но выступление получилось очень смазанным и неинтересным. И я понял, что нужно что-то менять. После прохождения курсов я смог преодолеть страх, сделать усилие над собой. Раньше я мог выступать только на небольшой аудитории, не более 20 человек. Сегодня я могу смело выступать на 70, 80, до 100 человек.</p>
                  <div class="recalll__slide-avtor">
                    <img src="image/photo/Logocall2.jpg" alt="">
                    <div class="recalll__slide-case">
                      <p class="recalll__slide-name">Константин круглов</p>
                      <p class="recalll__slide-position">CEO консалтинговой компании 
                        Universum financial Group</p>
                    </div>
                  </div>
                </div>
                
              </div>             
              
            </div>
            <div class="recalll__slide">
              <div class="recalll__slide-box">
                <div class="recalll__slide-wrapper">
                  <div class="recalll__slide-imager">
                    <picture>                  
                      <source srcset="image/photo/dyakonov.webp" type="image/webp">
                        <img src="image/photo/dyakonov.png" alt="">
                    </picture>
                  </div>
                </div>
                <div class="recalll__slide-inner">
                  <div class="recalll__slide-title">Подготовил лучшее выступление
                    для форума «Winning the Hearts»
                  </div>
                  <p class="recalll__slide-txt">Организаторы форума «Winning the Hearts» пригласили меня выступить и порекомендовали подготовиться со школой «КОРОЛЬ ГОВОРИТ!». Мне показалось это дикостью, я часто выступаю, зачем мне заниматься?
                    <br>  Не смотря на моё изначальное сопротивление, Дмитрий помог мне выбрать тему и понять, почему мне важно ее раскрыть. Мы сфокусировались на выступлении и получилось очень сильно! Без этой подготовки выступление было бы не просто другим, оно было бы хуже. Спасибо большое Дмитрию Макееву и школе «КОРОЛЬ ГОВОРИТ!».</p>
                  <div class="recalll__slide-avtor ">
                    <img class="recalll__slide-img1" src="image/photo/Logocall.jpg" alt="">
                    <div class="recalll__slide-case">
                      <p class="recalll__slide-name">БОРИС ДЬЯКОНОВ</p>
                      <p class="recalll__slide-position">Руководитель банка “Точка”</p>
                    </div>
                  </div>
                </div>
                
              </div>             
              
            </div>
            <div class="recalll__slide">
              <div class="recalll__slide-box">
                <div class="recalll__slide-wrapper">
                  <div class="recalll__slide-imager">
                    <picture>                  
                      <source srcset="image/photo/kruglov.webp" type="image/webp">
                        <img src="image/photo/kruglov.png" alt="">
                    </picture>                   
                  </div>
                </div>
                <div class="recalll__slide-inner">
                  <div class="recalll__slide-title">Стал смело выступать <br>
                    на аудиторию до 100 человек!
                  </div>
                  <p class="recalll__slide-txt">На курс меня привела сложная ситуация: мне пришлось выступить перед 50 людьми, но выступление получилось очень смазанным и неинтересным. И я понял, что нужно что-то менять. После прохождения курсов я смог преодолеть страх, сделать усилие над собой. Раньше я мог выступать только на небольшой аудитории, не более 20 человек. Сегодня я могу смело выступать на 70, 80, до 100 человек.</p>
                  <div class="recalll__slide-avtor">
                    <img src="image/photo/Logocall2.jpg" alt="">
                    <div class="recalll__slide-case">
                      <p class="recalll__slide-name">Константин круглов</p>
                      <p class="recalll__slide-position">CEO консалтинговой компании 
                        Universum financial Group</p>
                    </div>
                  </div>
                </div>
                
              </div>             
              
            </div>            
          </div>      
        </div>
      </section>
      <!-- <section class="company">
        <div class="container">
          <h2 class="title">Компании,<span class="kostil3"><br></span> чьи сотрудники обучались у нас
          </h2>
          <div class="company__slider slider">
            <div class="company__slide">
              <div class="company__slide-list">
                <img src="image/partners/1.jpg" alt="">
                <img src="image/partners/2.jpg" alt="">
                <img src="image/partners/3.jpg" alt="">
                <img src="image/partners/4.jpg" alt="">
                <img src="image/partners/5.jpg" alt="">
              </div>
              <div class="company__slide-list">
                <img src="image/partners/6.jpg" alt="">
                <img src="image/partners/7.jpg" alt="">
                <img src="image/partners/8.jpg" alt="">
                <img src="image/partners/9.jpg" alt="">
                <img src="image/partners/10.jpg" alt="">
              </div>    
              <div class="company__slide-listmob">
                <ul class="company__slide-listwrap">
                  <li>
                     <img src="image/partners/9.jpg" alt="">
                  </li>  
                  <li>
                    <img src="image/partners/7.jpg" alt="">
                  </li>
                </ul>
                <ul class="company__slide-listwrap">
                  <li><img src="image/partners/1.jpg" alt=""></li>
                  <li><img src="image/partners/2.jpg" alt=""> </li>          
                     
                </ul>
              </div>          
            </div>
            <div class="company__slide">
              <div class="company__slide-list">

                <img src="image/partners/1.jpg" alt="">
                <img src="image/partners/2.jpg" alt="">
                <img src="image/partners/3.jpg" alt="">
                <img src="image/partners/4.jpg" alt="">
                <img src="image/partners/5.jpg" alt="">
              </div>
              <div class="company__slide-list">
                <img src="image/partners/6.jpg" alt="">
                <img src="image/partners/7.jpg" alt="">
                <img src="image/partners/8.jpg" alt="">
                <img src="image/partners/9.jpg" alt="">
                <img src="image/partners/10.jpg" alt="">
              </div> 
              <div class="company__slide-listmob">
                <ul class="company__slide-listwrap">
                  <li>
                    <img src="image/partners/4.jpg" alt="">
                  </li>  
                  <li>
                    <img src="image/partners/6.jpg" alt="">
                  </li>
                </ul>
                <ul class="company__slide-listwrap">
                  <li><img src="image/partners/10.jpg" alt=""></li>
                  <li><img src="image/partners/5.jpg" alt=""> </li>          
                     
                </ul>                              
              </div>              
            </div>
            
          </div>
        </div>
      </section> -->
      <div class="block-corporate-training">
        <h2 class="title">Корпоративные тренинги</h2>
        
        <div class="container-2">
          <div class="content-items">
            <div class="content-item">
              <div class="content-item-container">
                <div class="content-item-heading">
                    <div class="content-item-image">
                        <img class="lazyload top-indent" src="image/trening/11.jpg" alt="">
                      </div>
                      <div class="content-item-heading-text">
                        <div>Jonson and Jonson</div>
                        <div class="content-item-heading-text-desc">135 медицинских представителей подготовили к презентации новых лекарственных препаратов врачам.</div>
                        <div class="content-item-heading-hashtag">#презентация</div>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="content-item">
                  <div class="content-item-container">
                      <div class="content-item-heading">
                          <div class="content-item-image">
                              <img class="lazyload " src="image/trening/1.jpg" alt="">
                          </div>
                          <div class="content-item-heading-text">
                              <div>Росбанк</div>
                              <div class="content-item-heading-text-desc">Сотрудников банка и участников банковского клуба обучили готовить в сжатые сроки текст и подачу публичных выступлений.</div>
                              <div class="content-item-heading-hashtag">#публичные выступления</div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="content-item">
                    <div class="content-item-container">
                        <div class="content-item-heading">
                            <div class="content-item-image">
                                <img class="lazyload top-indent" src="image/trening/2.jpg" alt="">
                            </div>
                            <div class="content-item-heading-text">
                                <div>Siemens</div>
                                <div class="content-item-heading-text-desc">15 менеджеров по продажам обучили методам продаж во время публичных выступлений.</div>
                                <div class="content-item-heading-hashtag">#продажи, #публичные выступления</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-item">
                    <div class="content-item-container">
                        <div class="content-item-heading">
                            <div class="content-item-image">
                                <img class="lazyload " src="image/trening/3.jpg" alt="">
                            </div>
                            <div class="content-item-heading-text">
                                <div>Бизнес-школа «Сколково»</div>
                                <div class="content-item-heading-text-desc">43 предпринимателя подготовили к презентации своих проектов перед инвесторами.</div>
                                <div class="content-item-heading-hashtag">#презентация, #публичные выступления</div>
                            </div>
                        </div>
                    </div>
                </div>
              <div class="content-item">
                    <div class="content-item-container">
                        <div class="content-item-heading">
                            <div class="content-item-image">
                                <img class="lazyload " src="image/trening/4.jpg" alt="">
                            </div>
                            <div class="content-item-heading-text">
                                <div>НПФ Лукойл-Гарант</div>
                                <div class="content-item-heading-text-desc">Топ-менеджера компании подготовили к проведению сложных переговоров</div>
                                <div class="content-item-heading-hashtag">#переговоры</div>
                            </div>
                        </div>
                    </div>
                </div>
               <div class="content-item">
                    <div class="content-item-container">
                        <div class="content-item-heading">
                            <div class="content-item-image">
                                <img class="lazyload " src="image/trening/5.jpg" alt="">
                            </div>
                            <div class="content-item-heading-text">
                                <div>Schneider Electric</div>
                                <div class="content-item-heading-text-desc">12 руководителей департаментов обучили правильному поведению на сцене, звучанию и технологиям написания текстов для выступлений.</div>
                                <div class="content-item-heading-hashtag">#публичные выступления</div>
                            </div>
                        </div>
                    </div>
                </div>
               <div class="content-item">
                    <div class="content-item-container">
                        <div class="content-item-heading">
                            <div class="content-item-image">
                                <img class="lazyload " src="image/trening/6.jpg" alt="">
                            </div>
                            <div class="content-item-heading-text">
                                <div>Р-Фарм</div>
                                <div class="content-item-heading-text-desc">20 руководителей проектов обучили правилам ведения переговоров с клиентами и презентаций проектов.</div>
                                <div class="content-item-heading-hashtag">#переговоры, #презентация</div>
                            </div>
                        </div>
                    </div>
                </div>
               <div class="content-item">
                    <div class="content-item-container">
                        <div class="content-item-heading">
                            <div class="content-item-image">
                                <img class="lazyload " src="image/trening/7.jpg" alt="">
                            </div>
                            <div class="content-item-heading-text">
                                <div>Международный медицинский Кластер</div>
                                <div class="content-item-heading-text-desc">20 руководителей отделов прошли курс по проведению деловых презентаций на английском языке.</div>
                                <div class="content-item-heading-hashtag">#английский язык, #презентация</div>
                            </div>
                        </div>
                    </div>
                </div>
               <div class="content-item">
                    <div class="content-item-container">
                        <div class="content-item-heading">
                            <div class="content-item-image">
                                <img class="lazyload " src="image/trening/8.jpg" alt="">
                            </div>
                            <div class="content-item-heading-text">
                                <div>Global Finance</div>
                                <div class="content-item-heading-text-desc">8 сотрудников финансового отдела обучили выступать перед камерой на телевидении и конференциях, освоить техники записи видеороликов.</div>
                                <div class="content-item-heading-hashtag">#работа с камерой, #телевидение</div>
                            </div>
                        </div>
                    </div>
                </div>
              <div class="content-item">
                    <div class="content-item-container">
                        <div class="content-item-heading">
                            <div class="content-item-image">
                                <img class="lazyload top-indent" src="image/trening/9.jpg" alt="">
                            </div>
                            <div class="content-item-heading-text">
                                <div>BSH Hausgeräte</div>
                                <div class="content-item-heading-text-desc">15 менеджеров (кадровый резерв) по продажам и поддержке клиентов обучили ораторскому искусству.</div>
                                <div class="content-item-heading-hashtag">#продажи, #ораторское искусство</div>
                            </div>
                        </div>
                    </div>
                </div>
               <div class="content-item">
                    <div class="content-item-container">
                        <div class="content-item-heading">
                            <div class="content-item-image">
                                <img class="lazyload " src="image/trening/10.jpg" alt="">
                            </div>
                            <div class="content-item-heading-text">
                                <div>Лизинг-Медицина</div>
                                <div class="content-item-heading-text-desc">8 менеджеров по продажам обучили правилам ведения сложных переговоров</div>
                                <div class="content-item-heading-hashtag">#переговоры</div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
        </div>
        
    </div>
      
      <section class="nearcurse">
        <div class="container">
          <div class="nearcurse__wrapper">
            <h2 class="nearcurse__title">Ближайший онлайн-курс ораторского искусства</h2>
            <div class="nearcurse__inner">
              <div class="nearcurse__box">
                <h4>старт курса</h4>
                <p><span>14 декабря </span><br>
                  Длительность 30 дней
                </p>
              </div>
              <div class="nearcurse__box">
                <h4>формат</h4>
                <p>15 видеоуроков,<br>
                  5 вебинаров по 60 минут<br>
                  Обратная связь по домашним
                  заданиям
                </p>
              </div>
              <a class="global-btn" href="#">Участвовать <span></span></a>
            </div>
            <form class="nearcurse__form">
              <div class="wrappper-input input-error wrappper-input-ok">
                <input  class="nearcurse__phone" type="tel" placeholder="Телефон">
                <p class="wrappper-input-error">Ой, Вы ввели неполный номер</p>
              </div>
              <button class="nearcurse__btn">Заказать консультацию</button>
            </form>
            <p class="nearcurse__ps">Нажимая на кнопку, вы даете согласие на обработку <a href="#">персональных данных</a></p>
          </div>
        </div>
      </section>
      <section class="variants" id="variants">
        <div class="container">
          <div class="variants__block-1 active">
            <h2 class="title">варианты участия</h2>
            <div class="variants__wrapper">
              <div class="variants__inner">
                <h4 class="variants__title">пакет эконом</h4>
                <p class="variants__price">7 900 руб.</p>
                <ul class="variants__list">
                  <li>30-дневный онлайн-курс: видеоуроки, домашние задания и раздаточный материал</li>
                  <li>3 дополнительных онлайн-урока от<br>
                    ТОП-преподавателей школы КОРОЛЬ ГОВОРИТ!: «Как перестать волноваться», «Как управлять аудиторией», «Как выступать эффективно»</li>
                </ul>
                <div class="variants__btn-wrapper">
                  <a href="#variants" class="global-btn variants-btn">Участвовать <span></span></a>
                </div>
              </div>
              <div class="variants__inner">
                <h4 class="variants__title">пакет премиум</h4>
                <p class="variants__price">9 900 руб.</p>
                <ul class="variants__list">
                  <li>30-дневный онлайн-курс: видеоуроки,вебинары, домашние задания и раздаточный материал</li>
                  <li>3 дополнительных онлайн-урока от<br>
                    ТОП-преподавателей школы КОРОЛЬ ГОВОРИТ!: «Как перестать волноваться», «Как управлять аудиторией», «Как выступать эффективно»</li>
                </ul>
                <ul class="variants__list-dop variants__list">
                  <li>Работа в команде с другими учениками<br>
                    Посещение дополнительных вебинаров на темы: "Storytelling", "Деловая речь", "Формирование личного бренда"</li>
                  <li>4 недели практики публичных онлайн-выступлений</li>
                  <li>Еженедельное живое общение с преподавателями</li>
                  <li>Индивидуальная обратная связь от преподавателей по вашим домашним заданиям</li>                
                </ul>
                <div class="variants__btn-wrapper">
                    <a href="#variants" class="global-btn variants-btn">Участвовать <span></span></a>
                </div>
              </div>
            </div>
          </div>
          <form class="variants__block-2 payment">
            <a class="payment-certificat" href="#"><img src="image/icons/kg_icon_certificate_rotate.svg" alt=""></a>
            <h4 class="payment__title">Забронировать место</h4>
            <p class="payment__subtext">Для бронирования внесите аванс 3000 руб. Мы свяжемся с вами для
              подтверждения регистрации после оплаты.
            </p>
            <div class="payment__date">
              <p>Даты курса</p>
              <select class="" name="select" id="select">
                <option value="25 сентября - 30 октября">25 сентября - 30 октября</option>
                <option value="15 сентября - 31 октября">15 сентября - 31 октября</option>
                <option value="20 сентября - 10 октября">20 сентября - 10 октября</option>
              </select>
            </div>
            <!-- input-error   ///  wrappper-input-ok
            class для wrapper-input  -->
            <div class="wrappper-input ">
              <input class="payment__input" type="text" placeholder="Имя Фамилия">
              <p class="wrappper-input-error">Ой, Вы ввели неполное Имя Фамилию</p>
            </div>
            <div class="wrappper-input ">
              <input class="payment__input payment__input-phone" type="phone" placeholder="Телефон">
              <p class="wrappper-input-error">Ой, Вы ввели неполный номер</p>
            </div>
            <div class="wrappper-input ">
              <input class="payment__input" type="email" placeholder="Email">
              <p class="wrappper-input-error">Ой, Вы ввели неполный Email</p>
            </div>
            
           
            <button class="payment__btn global-btn payment__btn-1 active">Оплатить бронь <span></span></button>
            <button class="payment__btn global-btn payment__btn-2">Оплата в рассрочку <span></span></button>
            <div class="payment__wrapper">
              <p>Способы оплаты</p>
              <img src="image/svg/icons_pay.svg" alt="">
            </div>
            <div class="payment__sber">
              <p class="payment__sber-title">Оформите обучение через сервис Покупай со Сбербанком в один клик</p>
              <div class="payment__sber-wrapper">
                <input class="payment__sber-input" type="checkbox" name="installmentplan" id="installmentplan">
                <label class="payment__sber-label" for="installmentplan">
                  <span>В рассрочку</span><br>
                  От 3 150 руб. в месяц, на 6 месяцев
                </label>
                <a class="payment__sber-link" href="#">Подробнее</a>
                <img src="image/svg/credit-sber-pay.svg" alt="">
              </div>
            </div>
            <p class="payment__ps">
              Оплачивая услугу, я принимаю условия  <a href="#">публичной оферты</a>  и даю согласие на обработку  <a href="#">персональных данных</a>.
            </p>
          </form>
        </div>
      </section>
      <section class="contact">
        <div class="container">
          <h2 class="title">Контакты</h2>
          <ul class="contact__list">
            <li>
              <img src="image/icon/phone.svg" alt="">
              <a href="tel:+74951800403">+7 (495) 180-04-03</a>
              <p>Москва</p>
            </li>
            <li>
              <img src="image/icon/mail.svg" alt="">
              <a href="mailto:client@korolgovorit.ru">client@korolgovorit.ru</a>              
            </li>
            <li>
              <a href="tel:88007759909">&ensp;8 (800) 775-99-09</a>
              <p>Россия</p>
            </li>
            <li>
              <img src="image/icon/whatsapp.svg" alt="">
              <a href="tel:+79157355216">+7 (915) 735-52-16</a>
              <p>WhatsApp</p>
            </li>
            <li>
              <img src="image/icon/instagramsketched.svg" alt="">
              <a href="#">@korolgovorit</a>
            </li>
          </ul>
          <p class="contact__call">Заказать звонок</p>
          <div class="contact__box">
            <img src="image/icon/whatsapp.svg" alt="">
            <a href="tel:+79157355216">+7 (915) 735-52-16</a>
          </div>         
        </div>
      </section>
      <section class="popular">
        <div class="container">
          <h2 class="title">Популярные курсы</h2>
          <a href="#" class="popular__link-curse">Посмотреть все курсы</a>
          <div class="popular__slider slider">
            <div  class="courses__slide ">	            
              <a href="#" class="courses__image">
                <img src="image/photo/onl1.jpg" alt="">
                <p class="courses__name">Артём Держун</p>
                
              </a>
             <!--  <div class="courses__slide-wrapper"> -->
                <p class="courses__ps">онлайн-курс</p>
                <h3 class="courses__subtitle">Ораторское <br> искусство за 30 дней</h3>
                <p class="courses__text">Вы научитесь без стресса выступать на сцене и онлайн-формате.</p>
                <div class="courses__inner">
                  <div class="courses__box">
                    <img src="image/icons/interface.png" alt="">
                    <p class="courses__box-txt">c 13 января</p>
                  </div>
                  <div class="courses__box">
                    <img src="image/icons/clock.png" alt="">
                    <p class="courses__box-txt">4 недели</p>
                  </div>
                  <div class="courses__box courses__box-rub">
                    <img src="image/icons/rub.png" alt="">
                    <p class="courses__box-txt">7 900</p>
                  </div>	                 
                </div>
                <a class="courses__slide-btn_1 courses__slide-btn" href="#">Подробнее о курсе</a>
              <!-- </div>    -->           
	         </div>

	         <div  class="courses__slide ">	            
              <a href="#" class="courses__image">
                <img src="image/photo/onl2.jpg" alt="">
                <p class="courses__name">Владимир Шопинский</p>
                
              </a>
              <!-- <div class="courses__slide-wrapper"> -->
                <p class="courses__ps">онлайн-курс</p>
                <h3 class="courses__subtitle">Технология влияния и убеждения</h3>
                <p class="courses__text">Вы научитесь аргументировать свою позицию и побеждать в переговорах!</p>
                <div class="courses__inner">
                  <div class="courses__box">
                    <img src="image/icons/interface.png" alt="">
                    <p class="courses__box-txt">c 28 декабря</p>
                  </div>
                  <div class="courses__box">
                    <img src="image/icons/clock.png" alt="">
                    <p class="courses__box-txt">1 недели</p>
                  </div>
                  <div class="courses__box courses__box-rub">
                    <img src="image/icons/rub.png" alt="">
                    <p class="courses__box-txt">1 490</p>
                  </div>	                 
                </div>
                <a class="courses__slide-btn_1 courses__slide-btn" href="#">Подробнее о курсе</a>
              <!-- </div>               -->
	         </div>

	         <div  class="courses__slide ">	            
              <a href="#" class="courses__image">
                <img src="image/photo/onl3.jpg" alt="">
                <p class="courses__name">Анна Котова</p>
                
              </a>
              <!-- <div class="courses__slide-wrapper"> -->
                <p class="courses__ps">онлайн-курс</p>
                <h3 class="courses__subtitle">Техника речи</h3>
                <p class="courses__text">Вы научитесь владеть своим голосом на  100% и сформируете четкую дикцию. </p>
                <div class="courses__inner">
                  <div class="courses__box">
                    <img src="image/icons/interface.png" alt="">
                    <p class="courses__box-txt">c 7 декабря</p>
                  </div>
                  <div class="courses__box">
                    <img src="image/icons/clock.png" alt="">
                    <p class="courses__box-txt"> 3 недели</p>
                  </div>
                  <div class="courses__box courses__box-rub">
                    <img src="image/icons/rub.png" alt="">
                    <p class="courses__box-txt">6 900</p>
                  </div>	                 
                </div>
                <a class="courses__slide-btn_1 courses__slide-btn" href="#">Подробнее о курсе</a>
              
           </div>	
           <div  class="courses__slide ">	            
            <a href="#" class="courses__image">
              <img src="image/photo/onl3.jpg" alt="">
              <p class="courses__name">Анна Котова</p>
              
            </a>
            <!-- <div class="courses__slide-wrapper"> -->
              <p class="courses__ps">онлайн-курс</p>
              <h3 class="courses__subtitle">Техника речи</h3>
              <p class="courses__text">Вы научитесь владеть своим голосом на  100% и сформируете четкую дикцию. </p>
              <div class="courses__inner">
                <div class="courses__box">
                  <img src="image/icons/interface.png" alt="">
                  <p class="courses__box-txt">c 7 декабря</p>
                </div>
                <div class="courses__box">
                  <img src="image/icons/clock.png" alt="">
                  <p class="courses__box-txt"> 3 недели</p>
                </div>
                <div class="courses__box courses__box-rub">
                  <img src="image/icons/rub.png" alt="">
                  <p class="courses__box-txt">6 900</p>
                </div>	                 
              </div>
              <a class="courses__slide-btn_1 courses__slide-btn" href="#">Подробнее о курсе</a>
            
         </div>	
          </div>
        </div>
      </section>
    </main>

    <footer class="footer" id="footer">
      <div class="container-big">
        <div class="footer__wrapper">
          <div class="footer__inner">
            <div class="footer__logo">
              <!-- <img class="footer__logo footer__logo-2" src="image/KG_logo-footer.png" alt=""> -->
              <!-- <img class="footer__logo" src="image/svg/KG_logo.png" alt=""> -->
              <p class="footer__title">ШКОЛа Король говорит!</p>
            </div>           
          	<a class="footer__gift orange" href="#">Подарочный сертификат <img src="image/icon/gift.svg" alt=""></a>
         
            <a class="footer__curses-link orange"  href="#">Блог</a>
            <a class="footer__curses-link orange"  href="#">Отзывы и кейсы</a>
            <a class="footer__curses-link orange"  href="#">Преподаватели</a>
            <p class="footer__paypal-text">Способы оплаты</p>

            <div class="footer__line">
              <img src="image/icon/icons_pay_sber.svg" alt="">
            </div>
            <div class="footer__ps-box">
              <p class="footer__ps">© ИП Савельев Е.В. ОГРН 315665800016472</p>
              <a href="#" class="footer__ps">Политика конфиденциальности</a>
              <a href="#" class="footer__ps">Публичная оферта</a>
            </div>          
          </div>
          <div class="footer__inner">
            <h4 class="footer__title">Очные курсы </h4>           
            <ul class="footer__list footer__list-show">
              <!-- <li class="footer__list-title"><span>показать</span></li> -->
              <li class="footer__item">
                <a class="footer__link orange" href="#">Ораторское искусство</a>
              </li>              
              <li class="footer__item">
                <a class="footer__link orange" href="#">Технология влияния и убеждения</a>
              </li>
            </ul>
            <ul class="footer__list footer__list-show footer__list-online">
              <li class="footer__title">Онлайн-курсы </li>    
              <!-- <li class="footer__list-title"><span>показать</span></li>              -->
              <li class="footer__item">
                <a class="footer__link orange" href="#">Ораторское искусство за 30 дней</a>
              </li>
              <li class="footer__item">
                <a class="footer__link orange" href="#">Технология влияния и убеждения</a>
              </li>
              <li class="footer__item">
                <a class="footer__link orange" href="#">Техника речи</a>
              </li>
              <li class="footer__item">
                <a class="footer__link orange" href="#">Эмоциональный интеллект</a>
              </li>
              <li class="footer__item">
                <a class="footer__link orange" href="#">Как избавиться от страха публичных выступлений</a>
              </li>
             
              <li class="footer__item">
                <a class="footer__link orange" href="#">Мастер убеждения</a>
              </li>
              <li class="footer__item footer__item-allcurses">
                <a class="footer__link orange" href="#">Посмотреть все курсы</a>
              </li>

            </ul>
          </div>
          <div class="footer__inner">
            <h4 class="footer__title">Адреса филиалов</h4>            
            <ul class="footer__list footer__list-black footer__list-up">
              <li class="footer__list-title "><a class="footer-citylink orange" href="#">Москва</a><span>все адреса</span></li>
              <li class="footer__item">
                <p class="footer__link" >ул. Шаболовка, д. 10, к. 2</p>
              </li>              
              <li class="footer__item ">
                <p class="footer__link" >ул. Смоленская, д. 8</p>
              </li>
              <li class="footer__item">
                <p class="footer__link" >ул. Симоновский Вал, д. 2</p>
              </li>
              <li class="footer__item ">
                <p class="footer__link" >ул. Новослободская, д. 23</p>
              </li>
              <li class="footer__item ">
                <p class="footer__link" >Лубянский проезд, д. 19, стр. 1</p>
              </li>
            </ul>
            <span class="footer__list-space  "></span>
            <ul class="footer__list footer__list-black">
              <li class="footer__list-title footer__list-title-show"><a class="footer-citylink orange" href="#">Санкт-Петербург </a><span>все адреса</span></li>              
              <li class="footer__item ">
                <p class="footer__link" >Кузнечный переулок, д. 6</p>
              </li>
              <li class="footer__item">
                <p class="footer__link" >ул. Достоевского, д. 19/21Б</p>
              </li>
              <li class="footer__item">
                <p class="footer__link" >ул. 9 Советская, д. 3</p>
              </li>
            </ul>
            <div class="footer__inline">
              <p class="footer__list-title_2"><a class="footer-citylink orange" href="#">Екатеринбург</a>, ул. 8 Марта, д. 51, БЦ&nbsp;Саммит</p> 
              <p class="footer__list-title_2"><a class="footer-citylink orange" href="#">Казань</a>, ул. Николая Ершова, д. 1А</p> 
              <p class="footer__list-title_2"><a class="footer-citylink orange" href="#">Краснодар</a>, ул. Красных Партизан, д. 194</p>
              <p class="footer__list-title_2"><a class="footer-citylink orange" href="#">Нижний Новгород</a>, ул. Пожарского, д. 1</p>
              <p class="footer__list-title_2"><a class="footer-citylink orange" href="#">Новосибирск</a>, ул. Чаплыгина, д. 47</p> 
            </div>
          </div>
          <div class="footer__inner footer__inner-right">
            <h4 class="footer__title">Соцсети и подписка</h4>
            <div class="footer__socials">
              <a href="#" class="footer__social">
                <img src="image/svg/whatsapp.png" alt="">
                <p>Whatsapp</p>
              </a>
              <a href="#" class="footer__social">
                <img src="image/svg/instagram-sketched.png" alt="">
                <p>Instagram</p>
              </a>
            </div>
            <p class="footer__txt">Получайте бесплатные видеоуроки и 
              полезную рассылку для развития своих 
              ораторских навыков
            </p>
            <div class="footer__mob-email">
              <div class="wrappper-input input-error wrappper-input-ok">
                <input class="footer__email" type="email" name="email" placeholder="Email">
                <p class="wrappper-input-error">Ой, Вы ввели неполный Email</p>
              </div>
              <button class="footer__btn"><span>Подписаться</span><img src="image/svg/tel.png" alt=""></button>
            </div>
            
            <p class="footer__peron">Нажимая на кнопку, вы даете согласие на обработку <a href="#">персональных данных</a></p>
          </div>
        </div>
      </div>
    </footer>
   <section class="postfoter">
     <div class="container">
      <h4 class="postfoter__title">Онлайн курсы ораторского мастерства</h4>
      <p class="postfoter__txt">Существует легенда, как однажды древнеримский оратор Цицерон, выступая на одном из собраний, убедил слушателей в правильности своей точки зрения по одному вопросу. Неважно по какому – важно то, что на следующий день он при этой же публике высказывал абсолютно противоположное мнение по той же самой теме. И люди снова согласились с тем, что он прав.
      </p>
      <p class="postfoter__txt">Таким образом, Цицерон продемонстрировал, что, в совершенстве владея ораторским мастерством, аудиторию всегда можно склонить на свою сторону. Именно поэтому умение говорить убедительно необходимо как на работе или на учебе, так и среди друзей, и в обществе. </p>
      <p class="postfoter__next" href="#">Читать подробнее</з>
      <div class="postfoter__show">
        <p>Так, ступеньки карьерной лестницы быстрее преодолевает тот сотрудник, кто логичнее и ярче представляет свои проекты на работе. Учеба дается легче тому студенту, который увереннее отвечает на экзаменах. Торговля идет активнее у того менеджера, кто ярко, обоснованно и доброжелательно рассказывает о плюсах своего товара. Вдохновляет коллектив на трудовые достижения тот руководитель, кто умеет веско, доходчиво объяснить новые задачи.</p>
        <h4>Что нужно для успеха?</h4>
        <p>Существует легенда, как однажды древнеримский оратор Цицерон, выступая на одном из собраний, убедил слушателей в правильности своей точки зрения по одному вопросу. Неважно по какому – важно то, что на следующий день он при этой же публике высказывал абсолютно противоположное мнение по той же самой теме. И люди снова согласились с тем, что он прав.</p>
        <p>Чтобы оратору достичь успеха, необходимо продумать и последовательно выстроить речь, представив аргументы в наиболее выгодном ракурсе. Помимо этого, выступающему необходимы хорошая дикция и сильный голос красивого тембра. Если говорить тихо или бормотать едва разборчиво, даже самая умная, логичная и содержательная речь не вызовет интереса у слушателей.</p>
        <p>Не каждому легко дается публичное выступление, хоть перед большой аудиторией, хоть в узкой дружеской компании. Некоторые люди настолько зажимаются, когда требуется, например, просто встать и сказать тост, что у них начинают трястись руки, ноги, а из головы напрочь улетучиваются все слова.</p>
        <p>Бывает, нужно произнести красивую речь, а необходимые эмоции никак не приходят. Значит, нужно управлять собой, тренироваться. Чтобы говорить красиво, связно и правильно, необходимо учиться, постигать практики ораторского искусства. Самое разумное — пойти на онлайн курсы ораторского мастерства. Те, кто их заканчивает, забывают о проблемах речи и о том, что когда-то их мучил страх публичных выступлений.</p>
        <h4>Для учебы не обязательно ехать на другой конец города</h4>
        <p>Сегодня дистанционное обучение стало весьма популярным и востребованным, потому что это очень удобно. У слушателя отпадает необходимость бежать куда-то строго к началу уроков, держать в уме расписание занятий.
        <p>Постигать науку красивой речи можно, не тратя много времени на дорогу к месту учебы – нужно лишь записаться на онлайн курсы ораторского искусства. Чтобы заниматься, необходим компьютер с выходом в интернет, микрофоном и веб-камерой, с помощью которых осуществляется связь с педагогами.</p>
        <p>Можно, конечно, попробовать постичь секреты ораторского искусства самостоятельно. Но это все равно что учиться играть на музыкальном инструменте по самоучителю: некому контролировать и корректировать результаты.</p>
        <h4>Куда обратиться?</h4>
        <p>Для тех, кто уже твердо решился говорить правильно, рекомендуются занятия в школе «Король говорит!», ставшей победителем конкурса журнала Forbes. Вы можете зарегистрироваться на 30-дневный онлайн курс ораторского искусства по телефону или заполнить форму и отправить нам свою заявку. Преподают на этом курсе педагоги сценической речи с богатым опытом, обучающие будущих актеров и дикторов уже в течение 18 лет.</p>
        <p>В течение месяца слушатели могут пройти 15 видеоуроков, после которых необходимо выполнять практические задания дома самостоятельно. Общение с педагогами будет проходить в виде вебинаров, всего их пять - каждый продолжительностью 60 минут. На вебинарах слушатели вместе с наставниками разберут домашние задания, обсудят, что получается, а над чем еще предстоит поработать.</p>
        <p>Тем, кто приступит к обучению на онлайн курсах ораторского искусства, преподаватели покажут упражнения, которые нужно делать, чтобы снять волнение перед выступлениями; расскажут, какие скороговорки помогут быстрее улучшить дикцию; научат правильно дышать, чтобы снять стресс, и сделать речь более ровной и гладкой.</p>
        <p>По окончании курса каждый слушатель почувствует изменения к лучшему: перестанет бояться публики, преодолеет страх выступления и начнет говорить свободно и раскованно.</p>
        <div class="postfoter__btn global-btn">Свернуть</div>
      </div>
     </div>  
   </section>
   
    
  </div>
  <link rel="stylesheet" href="css/page2.css">
  
  <script  src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script  src="js/slick.min.js"></script>
  <script  src="select.js"></script>
  <script src="js/jquery.maskedinput.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
  <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
  <script src="js/page2.js"></script>
  <script>    
    $(document).ready(function(){$(".block-corporate-training .content-items").slick({dots:!1,infinite:!0,centerMode:!1,arrows:!0,variableWidth:!0,variableHeight:!1,slidesToShow:2,slidesToScroll:1,responsive:[{breakpoint:768,settings:{infinite:!1,variableWidth:!0,slidesToShow:1,slidesToScroll:1}},{breakpoint:441,settings:{slidesToShow:1,slidesToScroll:1,centerMode:!0,centerPadding:"calc((100% - 260px) / 2)"}}],nextArrow:'<div class="slider-arrows right"><i class="icon icon__arrow-right"></i></div>',prevArrow:'<div class="slider-arrows left"><i class="icon icon__arrow-left"></i></div>'})});
  </script>
  
</body>
 
</html>