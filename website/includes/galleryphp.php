<?php
$sanrio['Hello Kitty'] = 'Hello Kitty was born in the suburbs of London. She lives with her parents and her twin sister Mimmy who is her best friend. Her hobbies include baking cookies and making new friends.';
$sanrio['Chacocat'] = 'chaco_Chococat tends to be a little scatterbrained at times, but he is always up on the latest news, thanks to his ultrasensitive “antenna” whiskers!';
$sanrio['Pochacco'] = 'pocha_Pochacco is a curious little guy who loves going for walks and eating banana ice cream.';
$sanrio['Pompompurin'] = 'pomri_This boy golden retriever is unmistakable in his trademark brown beret. He has a laidback demeanor and loves the phrase "let\'s go out!"';
$sanrio['Badtz-Maru'] = 'bmaru_Badtz-maru is one mischievous little penguin. He lives with his mother and pinball playing father in Gorgeoustown. Badtz-maru attracts lots of attention as he walks his pet alligator, Pochi.';
$sanrio['Cinnamoroll'] = 'croll_Cinnamoroll is Cafe Cinnamon\'s official mascot. He is quite shy, but very friendly, and sometimes takes a nap on customers\' laps.';
$sanrio['Kuromi'] = 'kromi_Kuromi is a tomboy, but behind her tough appearance, she is actually very girly. She enjoys writing in her diary and reading romance novels.';
$sanrio['My Melody'] = 'mymel_My Melody was born in the forest of Mariland. Her favorite hobby is baking cookies with her mother, and her favorite food is almond pound cake.';
?>

<table>
<?php foreach($sanrio as $name => $image)  :?>
<tr>
<td><img src="images/<?php echo substr($image, 0, 5);?>.jpg" alt="<?php echo $name;?>"</td>
<td><?php echo $name ;?></td>
<td><?php
    echo substr($image, 6, 200);
    ?></td>

</tr>
<?php endforeach ;?>
</table>
