
<!-- form style -->

<style>
    /* From Uiverse.io by ammarsaa */ 
.formR {
  display: flex;
  flex-direction: column;
  gap: 10px;
  max-width: 350px;
  padding: 20px;
  border-radius: 20px;
  position: relative;
  background-color: #1a1a1a;
  color: #fff;
  border: 1px solid #333;
}

.titleR {
  font-size: 28px;
  font-weight: 600;
  letter-spacing: -1px;
  position: relative;
  display: flex;
  align-items: center;
  padding-left: 30px;
  color: #00bfff;
}

.titleR::before {
  width: 18px;
  height: 18px;
}

.titleR::after {
  width: 18px;
  height: 18px;
  animation: pulse 1s linear infinite;
}

.titleR::before,
.titleR::after {
  position: absolute;
  content: "";
  height: 16px;
  width: 16px;
  border-radius: 50%;
  left: 0px;
  background-color: #00bfff;
}

.messageR, 
.signin {
  font-size: 14.5px;
  color: rgba(255, 255, 255, 0.7);
}

.signin {
  text-align: center;
}

.signin a:hover {
  text-decoration: underline royalblue;
}

.signin a {
  color: #00bfff;
}
 label .inputR {
  background-color: #333;
  color: #fff;
  width: 100%;
  padding: 20px 05px 05px 10px;
  outline: 0;
  border: 1px solid rgba(105, 105, 105, 0.397);
  border-radius: 10px;
}

.form label .inputR + span {
  color: rgba(255, 255, 255, 0.5);
  position: absolute;
  left: 10px;
  top: 0px;
  font-size: 0.9em;
  cursor: text;
  transition: 0.3s ease;
}

.form label .inputR:placeholder-shown + span {
  top: 12.5px;
  font-size: 0.9em;
}

.form label .inputR:focus + span,
.form label .inputR:valid + span {
  color: #00bfff;
  top: 0px;
  font-size: 0.7em;
  font-weight: 600;
}
.form label .input:valid + span {
  color: #00bfff;
  top: 0px;
  font-size: 0.7em;
  font-weight: 600;
}

.inputR {
  font-size: medium;
}

.submit {
  border: none;
  outline: none;
  padding: 10px;
  border-radius: 10px;
  color: #fff;
  font-size: 16px;
  transform: .3s ease;
  background-color: #00bfff;
}

.submit:hover {
  background-color: #00bfff96;
}

@keyframes pulse {
  from {
    transform: scale(0.9);
    opacity: 1;
  }

  to {
    transform: scale(1.8);
    opacity: 0;
  }
}
</style>


<section >
    <div id="interest" class="py-16 bg-black flex flex-col items-center justify-center py-16 bg-black e">
        <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold mb-4">{{ __('messages.register_interest') }}</h2>
        <p class="text-gray-700 mb-8">{{ __('messages.register_interest_description') }}</p>
        
        </div>
    <!-- form -->
   <!-- From Uiverse.io by ammarsaa --> 
    <div>
<form class="formR">
    <p class="titleR">{{ __('messages.register_interest') }} </p>
    <p class="messageR">{{ __('messages.register_interest_description') }} </p>
        <div class="flexR">
        <label>
            <input class="inputR" type="text" placeholder="" required="">
            <span>{{ __('messages.first_name') }}</span>
        </label>

        <label>
            <input class="inputR" type="text" placeholder="" required="">
            <span>{{ __('messages.last_name') }}</span>
        </label>
    </div>  
            
    <label>
        <input class="inputR" type="email" placeholder="" required="">
        <span>{{ __('messages.email') }}</span>
    </label> 
        
    <label>
        <input class="inputR" type="password" placeholder="" required="">
        <span>{{ __('messages.password') }}</span>
    </label>
    <label>
        <input class="inputR" type="password" placeholder="" required="">
        <span>{{ __('messages.confirm_password') }}</span>
    </label>
    <button class="submit">{{ __('messages.register_interest') }}</button>
    <p class="signin">{{ __('messages.already_have_account') }} <a href="#">{{ __('messages.signin') }}</a> </p>
</form>
</div>
</section>