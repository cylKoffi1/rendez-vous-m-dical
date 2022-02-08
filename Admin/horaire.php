<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../assets/css/calender.css">
</head>
<body>
<div class="calendar" id="calendar-app">
  <div class="calendar--day-view" id="day-view">
    <span class="day-view-exit" id="day-view-exit">&times;</span>
    <span class="day-view-date" id="day-view-date">MAI 29 2016</span>
    <div class="day-view-content">
      <div class="day-highlight">
        Tu <span class="day-events" id="day-events">aucun évènement aujourd'hui</span>. &nbsp; <span tabindex="0" onkeyup="if(event.keyCode != 13) return; this.click();" class="day-events-link" id="add-event" data-date>Ajouter un évènement ?</span>
      </div>
      <div class="day-add-event" id="add-day-event-box" data-active="false">
        <div class="row">
          <div class="half">
            <label class="add-event-label">
               Nom de l'évènement
              <input type="text" class="add-event-edit add-event-edit--long" placeholder="Evènement" id="input-add-event-name">
             
            </label>
          </div>
          <div class="qtr">
            <label class="add-event-label">
	Debut de l'heure 
              <input type="time" class="add-event-edit" placeholder="8:15" id="input-add-event-start-time" data-options="1,2,3,4,5,6,7,8,9,10,11,12" data-format="datetime">
              <input type="text" class="add-event-edit" placeholder="am" id="input-add-event-start-ampm" data-options="a,p,am,pm">
            </label>
          </div>
          <div class="qtr">
            <label class="add-event-label">
          Fin de l'heure
              <input type="time" class="add-event-edit" placeholder="9" id="input-add-event-end-time" data-options="1,2,3,4,5,6,7,8,9,10,11,12" data-format="datetime">
              <input type="text" class="add-event-edit" placeholder="am" id="input-add-event-end-ampm" data-options="a,p,am,pm">
            </label>
          </div>
          <div class="half">
            <a onkeyup="if(event.keyCode != 13) return; this.click();" tabindex="0" id="add-event-save" class="event-btn--save event-btn">envoi</a>
            <a tabindex="0" id="add-event-cancel" class="event-btn--cancel event-btn">retour</a>
          </div>
        </div>
        
      </div>
      <div id="day-events-list" class="day-events-list">
        
      </div>
	  <div class="day-inspiration-quote" id="inspirational-quote">
		  
      </div>
    </div>
  </div>
  <div class="calendar--view" id="calendar-view">
    <div class="cview__month">
      <span class="cview__month-last" id="calendar-month-last">Avr</span>
      <span class="cview__month-current" id="calendar-month">Mai</span>
      <span class="cview__month-next" id="calendar-month-next">Jun</span>
    </div>
    <div class="cview__header">Dim</div>
    <div class="cview__header">Lun</div>
    <div class="cview__header">Mar</div>
    <div class="cview__header">Mer</div>
    <div class="cview__header">jeu</div>
    <div class="cview__header">Ven</div>
    <div class="cview__header">Sam</div>
    <div class="calendar--view" id="dates">
    </div>
  </div>
  <div class="footer">
    <span><span id="footer-date" class="footer__link">Aujourd'hui est le 30 MAI</span></span>    
  </div>
</div>
<script src="../assets/js/calender.js"></script>
</body>
</html>