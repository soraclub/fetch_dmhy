.PHONY: build todo

all: run mag 
	sleep 2
	make todo

run:
	php run.php

mag:
	@#mv $(shell date +'%Y-%m-%d')/*.magnet /data1/guanzi/tools/magnet_server/todo/
	mv todo/*.magnet /data1/guanzi/tools/magnet_server/todo/

todo:
	sqlite3 /data1/guanzi/tools/magnet_server/data/task.db 'select name , status from task where status != 4'
