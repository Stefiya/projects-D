from django.shortcuts import render
from django.http import HttpResponse
from . models import product
# Create your views here.
def index(request):
    pro1 = product.objects.all
    #return HttpResponse("<h1>Hello World</h1>")
    return render(request,'index.html',{'pro2':pro1})
