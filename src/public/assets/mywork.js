console.log("rjd");




$("#addFields").click(function(){
   
   $("#additionalFields").append("<label>Label</label> <br> <input type='text' name='label[]' /> <br><label>Value</label>  <br><input type='text' name='value[]' /><br>");
});

$("#addVariations").click(function(){
    $("#variations").append(`        <label> <b>
    <------Variation Field------->
</b></label>

<div id="VariationNameAndValue">


<br><label> <b>Variation Name </b></label>
<input type="text" name='variationName[]' />
<label> <b>Variation Value </b></label>
<input type="text" name='variationValue[]' /><span class="buttons" id="addVariationNameAndValue"><b> + </b></span><br>


</div>
<br><label> <b>Variation Price </b></label>
<input type="text" name='variationPrice' /><br>`);
});


 $("#addVariationNameAndValue").click(function(){
    console.log(" addVariationNameAndValue");
  });
