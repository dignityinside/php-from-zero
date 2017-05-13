<?php
/*
owner (хозяин) | group (группа) | other (пользователи)
bytes
4  r  read     1  1  1
2  w  write    1  0  0
1  e  execute  1  0  0
-----------------------
               7  4  4
*/
chmod('log.txt', 0755);
echo substr(sprintf('%o', fileperms('log.txt')), -4);