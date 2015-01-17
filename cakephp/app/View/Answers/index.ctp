<p>anc</p>
<p>この中から自分でも一番腹がたったものを選びなさい</p>
<?php echo $this->Form->create('result',array('action'=>'index')); ?>

<?php echo $this->Form->postLink($q1, array('controller'=>'results' ), array('class'=>'sample')); ?>
<?php echo $this->Form->postLink($q2, array('controller'=>'results' ), array('class'=>'sample')); ?>
<?php echo $this->Form->postLink($q3, array('controller'=>'results' ), array('class'=>'sample')); ?>
<?php echo $this->Form->postLink($q4, array('controller'=>'results' ), array('class'=>'sample')); ?>
<?php echo $this->Form->postLink($q5, array('controller'=>'results' ), array('class'=>'sample')); ?>

<?php echo $this->Form->end("次へ"); ?>
