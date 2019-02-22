# WP-RSS-Aggregator-OpenGraph

# Objective
  Integrate wp_rss_aggregator to create a new way to shows the news.

# Install Experience (7 steps)
1) Intall Wordpress;
2) Install WP RSS Aggregator plugin. Active it.;
3) Add RSS Feed Sources to feed it while install anothers plugins;
4) Install WP Colorbox plugin if you want use Lightbox. Active it.;
5) Install WP RSS Aggregator OpenGraph plugin.
6) Create a new page and put aggregator's shorcode [wp_rss_aggregator]. Publish and look.
7) Active WP RSS Aggregator OpenGraph plugin, re-publish and look again.

# Techs
  We inject a javascript into all pages to read wp rss aggregator items, if have, loading new page itens, readings meta-data information "into" the link and load it into wp_rss_aggregator preview, showing better features to first impressions.

# Thanks
- [RebelCode](https://www.wprssaggregator.com) for [WP_RSS_Aggregator](https://wordpress.org/plugins/wp-rss-aggregator/) free version plugin.
- [Noor](https://noorsplugin.com/wordpress-colorbox-plugin/) for [WP Colorbox](https://br.wordpress.org/plugins/wp-colorbox/) plugin.
- [Scottmac](https://github.com/scottmac) for PHP implementation of [OpenGraph](http://ogp.me) library at [GitHub Repository](https://github.com/scottmac/opengraph/).




