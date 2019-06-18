<?php

  /**
   *
   */
  class Form
  {

    public function input($value=array())
    {
      return sprintf('<input %s>', $this->getAttr($value));
    }

    public function submit($value=array())
    {
      return sprintf('<input type="submit" %s>', $this->getAttr($value));
    }

    public function password($value=array())
    {
      return sprintf('<input type="password" %s>', $this->getAttr($value));
    }

    public function textarea($value=array())
    {
      return sprintf('<textarea %s>%s</textarea>', $this->getAttrTextarea($value), $value['value']);
    }

    public function open($value=array())
    {
      return sprintf('<form %s>', $this->getAttr($value));
    }

    public function close($value=array())
    {
      return '</form>';
    }

    private function getAttr($attr)
    {
      $res = '';
      foreach ($attr as $k => $v) {

        $res.= $k.'="'.$v.'"';

      }

      return $res;
    }

    private function getAttrTextarea($attr)
    {
      $res = '';
      foreach ($attr as $k => $v) {
        if($k != 'value'){
          $res.= $k.'="'.$v.'"';
        }
      }
      return $res;
    }
  }

  $form = new Form();

  echo $form->open(['action'=>'index.php', 'method'=>'POST']);
	//Код выше выведет <form action="index.php" method="POST">

  echo $form->input(['type'=>'text', 'value'=>'!!!']);
	//Код выше выведет <input type="text" value="!!!">

  echo $form->input(['type'=>'text', 'value'=>'!!!', 'class'=>'ggg']);

	echo $form->password(['value'=>'!!!']);
	//Код выше выведет <input type="password" value="!!!">

	echo $form->submit(['value'=>'go']);
	//Код выше выведет <input type="submit" value="go">

	echo $form->textarea(['placeholder'=>'123', 'value'=>'!!!']);
	//Код выше выведет <textarea placeholder="123">!!!</textarea>



	echo $form->close();
	//Код выше выведет </form>

?>
