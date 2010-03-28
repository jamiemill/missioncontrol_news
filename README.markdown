## MissionControl News Plugin

This provides a very simple table of news articles, organised by date. It has its own views accessible through the `/news/news_articles/...` URLs.

You can also grab the latest article headlines from anywhere else like so:

	<?php $news = $this->requestAction('/news/news_articles/index/limit:10/sort:date/direction:desc'); ?>

Copyright (c) 2009-2010 Jamie Mill - jamiermill/a/gmail.com