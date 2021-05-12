# NLP Analysis on Kickstart Projects 
This project is a proof-of-concept for a NLP approach to increase the chance of building a successful crowdfunding project in platform like Kickstarter. It also draws insights from the crowdfunding landscape that are useful for the platform management and the individual fundraisers. 

## Data 
We used dataset published by WebRobots and crawled our own data from Kickstarter. 
WebRobots dataset: https://webrobots.io/kickstarter-datasets/

## Data preprocessing
We combined the comments from our self-crawled datasets with the Webrobots dataset through project name. Non-English rows were identified and removed by Langid model. Words are tokenised and coverted to lowercase.  

## Solution
We used Latent Dirichlet Allocation and Non-negative matrix factorisation to understand the project topics so that we can help fundraiser come up with better project labelling and help the platform with better project categorisation. 

We used VADER and Senticnet and NLP techniques to conduct sentiment analysis on different types of projects, such as project status, project category etc. 

![Screenshot 2021-05-12 at 5 40 18 PM](https://user-images.githubusercontent.com/35590255/117953939-1fa7b080-b349-11eb-8d66-0ba3002de28d.jpg)

### LDA 


### NMF 
### Sentiment Analysis 
### Webapp Demo 

## Insights 

## References 
