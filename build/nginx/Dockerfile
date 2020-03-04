FROM nginx:1.17-alpine
COPY nginx.conf /etc/nginx/nginx.conf
COPY default.conf /etc/nginx/conf.d/default.conf
WORKDIR /var/www/html
EXPOSE 80
EXPOSE 443
# CMD ["nginx"]