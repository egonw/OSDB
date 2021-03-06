<h2>Update Publication</h2>
<?php
echo $this->Form->create('Publication',['url'=>'/publications/update/'.$args['id']]);
echo $this->Form->input('title',['type'=>'text','size'=>32,'maxlength'=>256,'default'=>$data['title']]);
echo $this->Form->input('description',['type'=>'textarea','rows'=>4,'cols'=>80,'maxlength'=>1024,'default'=>$data['description']]);
echo $this->Form->input('isbn',['type'=>'text','label'=>'ISBN','size'=>12,'maxlength'=>17,'default'=>$data['isbn']]);
echo $this->Form->input('eisbn',['type'=>'text','label'=>'eISBN','size'=>12,'maxlength'=>17,'default'=>$data['eisbn']]);
echo $this->Form->input('total_files',['type'=>'text','label'=>'PDF Count in Set','size'=>7,'default'=>$data['total_files']]);
echo $this->Form->input('url',['type'=>'text','label'=>'Webpage for Set','size'=>32,'maxlength'=>128,'default'=>$data['url']]);
echo $this->Form->end('Update Publication');
?>