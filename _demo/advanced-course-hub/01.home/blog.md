---
title: Home
body_classes: 'header-image fullwidth'
child_type: item
post_icon: calendar-o
content:
    items: '@self.children'
    limit: 10
    order:
        by: date
        dir: desc
    pagination: true
modular_content:
    items: '@self.modular'
    order:
        by: default
        custom:
            - _important-reminders
            - _unit-preparations
feed:
    description: 'Grav CMS Open Course Hub Description'
    limit: 10
hide_git_sync_repo_link: false
metadata:
    'twitter:card': summary
    'twitter:site': '@getgrav'
    'twitter:title': 'Grav CMS Open Course Hub Title'
    'twitter:description': 'Grav CMS Open Course Hub Description'
    'twitter:image': ''
---
