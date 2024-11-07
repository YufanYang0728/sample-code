jQuery( document ).ready(function() {
    let testimonial_ok=false;
    //Inputs that determine what fields to show
    let rating = $('#live_form input:radio[name=rating]');
    let testimonial=$('#live_form input:radio[name=testimonial]');

    //Wrappers for all fields
    let single = $('#live_form textarea[name="choose_single"]').parent();
    let married = $('#live_form textarea[name="choose_married"]').parent();
    let skids = $('#live_form textarea[name="single_kids"]').parent();
    let mkids = $('#live_form textarea[name="m_kids"]').parent();
    let retire  = $('#live_form textarea[name="retirement"]').parent();
    let all=single.add(married).add(skids).add(mkids).add(retire);

    rating.change(function(){
        let value=this.value;
        all.addClass('hidden'); //hide everything and reveal as needed

        if (value == 'Single' || value == 'Married'){
            single.removeClass('hidden');
        }
        else if (value == 'Single_Parent' || value == 'Married_Kids'){
            married.removeClass('hidden');
        }
        else if (value == 'Retirement'){
            retire.removeClass('hidden');

        }
    });



});
