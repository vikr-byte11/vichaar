
     <div class="container">
        <h3>Font Selector</h3>
        <input type="text" name="" id="fonts">
       </div>
    <script>
        $('#fonts').fontselect().on('change',function(){
            var  font = this.value.replace(/\+/g, ' ');
            font = font.split(':');
            var fontFamily = font[0];
		    var fontSpecs = font[1] || null;
            $('.results').css('font-family',fontFamily).css('font-weight',fontWeight);
        }).trigger('setFont',['Arial',300]);
    </script>
