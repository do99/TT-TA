@extends('pages.cpanel')
@section('content')
    
    <div class="todo">
        <div class="tdl">
            <div class="cardBoxApp">
                <div class="cardApp">
                    <div class="iconBox">
                        <ion-icon name="notifications-outline" style="color: #F29339 !important"> </ion-icon>
                    </div>
                    <div>   
                        <div class="numbers" >24</div>
                        <div class="cardName" >Pending Order !</div>
                    </div>
                </div>
                
                <div class="cardApp">
                    <div class="iconBox">
                        <ion-icon name="mail-unread-outline" style="color: #10c0b1 !important"></ion-icon>
                    </div>
                    <div>   
                        <div class="numbers" >24</div>
                        <div class="cardName" >Approval Order</div>
                    </div>
                </div>
                <div class="cardApp">
                    <div class="iconBox">
                        <ion-icon name="checkmark-circle-outline" style="color: rgb(31, 70, 241) !important"></ion-icon>
                    </div>
                    <div>   
                        <div class="numbers" >24</div>
                        <div class="cardName" >Complete Order</div>
                    </div>
                </div>
            </div>

@endsection