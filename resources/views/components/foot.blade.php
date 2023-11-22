<script src="{{url('js/jquery.min.js')}}"></script>
<script src="{{url('js/bootstrap.bundle.min.js')}}"></script>
<script src="{{url('js/main.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

<script>
    $(document).ready(function() {
        $(".add_more_btn_popup").click(function() {
            var newInput = '<div class="form-group"><input type="text" placeholder="name@example.com"></div>';
            $(newInput).insertBefore(this);  // Use 'this' to insert before the clicked button
        });
    });
    
    $(".new_box_open_participate").on("click", function(){
         event.preventDefault(); 
        // Find the corresponding "participate_show" for this click
        const participateShow = $(this).closest('.team_matches_grid').next('.participate_show');
    
        // Toggle the "participate_show" for this specific click
        participateShow.toggle();
    
        // Add or remove a class to the clicked element
        if ($(this).hasClass("rotate")) {
            $(this).removeClass("rotate");
        } else {
            $(this).addClass("rotate");
        }
    });
    
    
    </script>
@include('flashy::message')
