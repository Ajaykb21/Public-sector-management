<div>                  <!--comment section-->
    <button  class="bt" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Leave a comment</button>                                                               
    <div id="id01" class="modal">                                                                  
        <form class="modal-content animate" action="/action_page.php">
            <div class="imgcontainer">
                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>                                                                     
            </div>
                                                                
            <div class="co-container">
                <label><b>Username</b></label>
                <input  class="comm" type="text" placeholder="Enter your name" name="uname" required>
                                                                
                <label><b>Email-id</b></label>
                <input class="comm" type="email" placeholder="Enter email" name="email" required>
                                                                      
                <label><b>Comment</b></label>
                <input class="comm" type="text" placeholder="Leave a comment" name="comment" required>
                                                                        
                <button  class="bt" type="submit">Submit</button>
                                                                      
            </div>
                                                                
            <div class="co-container" style="background-color:#f1f1f1">
                <button   type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                                                                     
            </div>
        </form>
    </div>
                                                                
    <script>
        // Get the modal
        var modal = document.getElementById('id01');
        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
        if (event.target == modal) {
        modal.style.display = "none";
        }
        }
    </script>                                                                                                                                                                                                               
</div>             <!--comment section ends here-->