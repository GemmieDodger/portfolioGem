
<form name="frmCheck"  action="" method="POST" enctype="multipart/form-data">

                <div class="form-group">
                    <p id="dieselLevel" hidden>This will vary by boat. A lot of boat diesel tanks are 200 litres<p>
                    <label for='dieselLevel'>Diesel level (pre-journey in litres) </label>
                    <input type="number" name="dieselLevel" class="demo-form-field form-control form-control-lg" placeholder="What level your diesel was pre-journey" required value = "<?= $post->diesellevel; ?>">
                </div>
<div id="cruising">
                <div class="form-group">
                    <label for='hoursCruising'>Hours cruising</label> <!--avg 0.4litres per hour-->
                    <input type="time" name="hoursCruising" id = "hoursCruising" class="demo-form-field form-control form-control-lg" value="<?= $post->hourscruising; ?>" required />
                </div>
                <div class="form-group">
                    <p id="LitresPHCruisingHelp" hidden>This will vary by boat due to variables such as size, speed and flow.  If you do not know this for your boat, leave blank and we use the average 1.3 litres per hour<p>
                    <label for='litresPHCruising'>Cruising litre's per hour</label> <!--Webasto quotes a figure of 0.25 to 0.5 litres of fuel per hour-->
                    <input type="number" name="litresPHCruising" id = "litresPHCruising" class="demo-form-field form-control form-control-lg" value="1.3"  />
                </div>
</div>
<div id="heater">
                <div class="form-group">
                    <label for='hoursHeater'>Hours of heater use</label> <!--Webasto quotes a figure of 0.25 to 0.5 litres of fuel per hour-->
                    <input type="number" name="hoursHeater" id = "hoursHeater" class="demo-form-field form-control form-control-lg" value="<?= $post->litresperhour; ?>" />
                </div>
                <div class="form-group">
                    <p id="litresPHHeaterHelp" hidden>This will vary on Webasto type. If you do not know this for your boat, leave blank and we use the average 0.38 litres per hour<p>
                    <label for='litresPHHeater'>Diesel heater litre's per hour</label> <!--Webasto quotes a figure of 0.25 to 0.5 litres of fuel per hour-->
                    <input type="time" name="litresPHHeater" id = "litresPHHeater" class="demo-form-field form-control form-control-lg" value="<?= $post->litresperhour; ?>" />
                </div>
</div>
                <a onclick='rps' id="checkDiesel" href="#" type="submit" name="checkdiesel" class="btn button-post mt-3">>Tell me my new diesel level!</a>
         <!-- LOOK INTO HOW I CAN ONLY HAVE ONE AS REQUIRED IF ANOTHER HAS BEEN FILLED OUT-->       
                
            </form>
