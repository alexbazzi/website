# Personal website
My personal website is a modern homage to the '90s, serving as the dichotomy between the simple aesthetics of retro websites with the unnecessary complexity of the latest DevOps abstractions. It's built using HTML, CSS, and JavaScript. Haven't touched a js framework yet.

![diagram](assets/img/website-diagram-dark.png "Website Logical Diagram")

Hosted on AWS S3 and globally distributed via AWS CloudFront, it ensures fast access anywhere. It also uses a proxy --created with an HTTP AWS API Gateway-- to avoid CORS errors when retrieving resources from other domains (e.g. fonts, RSS feeds, etc...). An automated GitHub Actions workflow keeps the production site updated and manages the CloudFront distribution with every push to the master branch.

Read more about it in the <a href="https://www.xbazzi.com/website.html">article</a>.
