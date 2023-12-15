.PHONY: build


mag:
	mv $(shell date +'%Y-%m-%d')/*.magnet /data1/guanzi/tools/magnet_server/todo/

run:
	php run.php

todo:
	sqlite3 /data1/guanzi/tools/magnet_server/data/task.db 'select name , status from task where status != 4'