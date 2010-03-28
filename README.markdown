# MissionControl News Plugin

This is a plugin for the [MissionControl CMS](http://github.com/jamiemill/missioncontrol). Whilst it is fairly self-contained it is really designed to be used in that context and probably won't work anywhere else.

## Features

This provides a very simple table of news articles, organised by date. It has its own views accessible through the `/news/news_articles/...` URLs.

You can also grab the latest article headlines from anywhere else like so:

	<?php $news = $this->requestAction('/news/news_articles/index/limit:10/sort:date/direction:desc'); ?>

Copyright (c) 2009-2010 Jamie Mill - jamiermill/a/gmail.com