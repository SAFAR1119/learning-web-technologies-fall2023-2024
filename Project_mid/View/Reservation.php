<form action="reservation.php" method="post">
  <hr>
  <div class="elem-group inlined">
    <label for="adult">Adults</label>
    <input type="number" id="adult" name="total_adults" placeholder="2" min="1" required>
  </div>
  <div class="elem-group inlined">
    <label for="child">Children</label>
    <input type="number" id="child" name="total_children" placeholder="1" min="0" required>
  </div>
  <div class="elem-group inlined">
    <label for="journey-date">Journey Date</label>
    <input type="date" id="journey-date" name="checkin" required>
  </div>
  <div class="elem-group inlined">
    <label for="return-date">Return Date</label>
    <input type="date" id="return-date" name="return" required>
  </div>
  <div class="elem-group">
    <label for="place-selection">Select Place Preference</label>
    <select id="place-selection" name="place_preference" required>
        <option value="">Choose place from the List</option>
        <option value="cox's-bazar">Cox's Bazar</option>
        <option value="rangamati">Rangamati</option>
        <option value="sundorbon">Sundorbon</option>
        <option value="teknaf">Teknaf</option>
        <option value="saint-martin">Saint Martin</option>
    </select>
  </div>
  <hr>
  <div class="elem-group">
    <label for="message">Anything Else?</label>
    <textarea id="message" name="visitor_message" placeholder="Tell us anything else that might be important." required></textarea>
  </div>
  <button type="submit">Book Tour</button>
</form>