import httpProxy from 'http-proxy';
import Logger from '../../utils/Logger.js';

/**
 * プロキシサーバー機能を提供するモジュール
 * - APIリクエストの転送
 * - エラーハンドリング
 * - リクエスト/レスポンスのログ出力
 */

export async function setupProxy(serverConfig) {
  try {
    const proxy = httpProxy.createProxyServer();

    // プロキシエラーのハンドリング
    proxy.on('error', (err, req, res) => {
      Logger.log('ERROR', 'プロキシエラーが発生しました:', err);
      res.writeHead(500, { 'Content-Type': 'text/plain' });
      res.end('プロキシエラーが発生しました。');
    });

    // プロキシリクエストのログ
    proxy.on('proxyReq', (proxyReq, req) => {
      Logger.log('DEBUG', `プロキシリクエスト: ${req.method} ${req.url}`);
    });

    // プロキシレスポンスのログ
    proxy.on('proxyRes', (proxyRes, req) => {
      Logger.log(
        'DEBUG',
        `プロキシレスポンス: ${proxyRes.statusCode} ${req.url}`,
      );
    });

    // ミドルウェアの設定
    serverConfig.middleware = [
      {
        route: '/api',
        handle: (req, res, next) => {
          proxy.web(req, res, {
            target: serverConfig.proxy.target,
            changeOrigin: true,
          });
        },
      },
    ];

    Logger.log('INFO', `プロキシを設定しました: ${serverConfig.proxy.target}`);
  } catch (err) {
    Logger.log('ERROR', 'プロキシの設定中にエラーが発生しました:', err);
    throw err;
  }
}
