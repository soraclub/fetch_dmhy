.PHONY: build


mag:
	mv $(shell date +'%Y-%m-%d')/*.magnet /data1/guanzi/tools/magnet_server/todo/

run:
	php run.php
