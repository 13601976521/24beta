<?php
class PostController extends Controller
{
    public function actionShow($id)
    {
        $id = (int)$id;
        $post = Post::model()->findByPk($id, array('state != :state'), array(':state'=>POST_DISABLED));
        
        if (null === $post)
            throw new CHttpException(404, t('post_is_not_found'));

        
        
        $this->render('show', array(
            'post' => $post,
        ));
    }
    
    
}